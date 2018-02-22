<?php
if(!function_exists('curl_init')) {
    throw new Exception('CURL PHP extension missing!');
}

if(!function_exists('json_decode')) {
	throw new Exception('JSON PHP extension missing!');
}

if(!defined('Doku_dir')) {
	//Define path.
	define('Doku_dir', dirname(__FILE__) . '/');

	//Load important files.
	require(Doku_dir . 'Doku/Initiate.php');
	require(Doku_dir . 'Doku/Api.php');
	require(Doku_dir . 'Doku/Library.php');
}

class Doku
{

	private $sharedKey;
	private $mallId;

	public static $redirectUrl;
	public static $paymentChannel;
	public static $customer;
	public static $basket;

	public function __construct()
	{
		$ci =& get_instance();
		// Development
		// $ci->sharedKey = '56eu7ZTpZxB6';
		// $ci->mallId    = '4318';

		// Production
		$ci->sharedKey = '56eu7ZTpZxB6';
		$ci->mallId    = '2131';
	}

	public function credit_card_payment($params)
	{
		$ci =& get_instance();

		//Set sharedKey and mallId;
		Doku_Initiate::$sharedKey = $ci->sharedKey;
		Doku_Initiate::$mallId    = $ci->mallId;

		//Create words.
		$words = Doku_Library::doCreateWords($params);

		//Set $dataPayment.
		$dataPayment = array(
			'req_mall_id'           => $ci->mallId, 
	        'req_chain_merchant'    => $ci->input->post('doku_chain_merchant'), 
	        'req_amount'            => $params['amount'], 
	        'req_words'             => $words, 
	        'req_words_raw'         => Doku_Library::doCreateWordsRaw($params), 
	        'req_purchase_amount'   => $params['amount'], 
	        'req_trans_id_merchant' => $params['invoice'], 
	        'req_request_date_time' => date('YmdHis'), 
	        'req_currency'          => $params['currency'], 
	        'req_purchase_currency' => $params['currency'], 
	        'req_session_id'        => sha1(date('YmdHis')), 
	        'req_name'              => Doku::$customer['name'], 
	        'req_payment_channel'   => Doku::$paymentChannel, 
	        'req_basket'            => Doku::$basket, 
	        'req_email'             => Doku::$customer['data_email'], 
	        'req_token_id'          => $params['token'], 
	        'req_mobile_phone'      => Doku::$customer['data_phone'], 
	        'req_address'           => Doku::$customer['data_address']
		);

		//Payment processing.
		$responsePayment = Doku_Api::doPayment($dataPayment);
// pre(array($dataPayment,$responsePayment));
		//Check if transaction is success.
		if($responsePayment->res_response_code == '0000') { //If success.
			//process tokenization
			if(isset($responsePayment->res_bundle_token)) {
				$tokenPayment = json_decode($responsePayment->res_bundle_token);

				if($tokenPayment->res_token_code == '0000') {
					//save token
					$getTokenPayment = $tokenPayment->res_token_payment;
				}
			}

			//redirect process to doku and dont show doku result view.
			$responsePayment->res_redirect_url = Doku::$redirectUrl .'?TRANSIDMERCHANT='. $responsePayment->res_response_msg .'&invoice='. $responsePayment->res_trans_id_merchant;
			$responsePayment->res_show_doku_page = false;

			echo json_encode($responsePayment);
		} else { //If not.
			// $this->session->set_flashdata('error','Your payment trasaction was failed, please try again.');
			// redirect('insurance');
			// payment_failed_redirect();
			echo json_encode($responsePayment);
		}
	}

	public function mandiri_clickpay_process($params)
	{
		$ci =& get_instance();

		Doku_Initiate::$sharedKey = $ci->sharedKey;
		Doku_Initiate::$mallId    = $ci->mallId;

		$cc     = str_replace(' - ', '', $ci->input->post('cc_number'));
		$words  = Doku_Library::doCreateWords($params);

		$dataPayment = array(     
			'req_mall_id'           => $ci->mallId, 
			'req_chain_merchant'    => 'NA', 
			'req_amount'            => $params['amount'], 
			'req_words'             => $words, 
			'req_purchase_amount'   => $params['amount'], 
			'req_trans_id_merchant' => $params['invoice'], 
			'req_request_date_time' => date('YmdHis'), 
			'req_currency'          => '360', 
			'req_purchase_currency' => '360', 
			'req_session_id'        => sha1(date('YmdHis')), 
			'req_name'              => Doku::$customer['name'], 
			'req_payment_channel'   => '02', 
			'req_email'             => Doku::$customer['data_email'], 
			'req_card_number'       => $cc, 
			'req_basket'            => Doku::$basket, 
			'req_challenge_code_1'  => $ci->input->post('CHALLENGE_CODE_1'), 
			'req_challenge_code_2'  => $ci->input->post('CHALLENGE_CODE_2'), 
			'req_challenge_code_3'  => $ci->input->post('CHALLENGE_CODE_3'), 
			'req_response_token'    => $ci->input->post('response_token'), 
			'req_mobile_phone'      => Doku::$customer['data_phone'], 
			'req_address'           => Doku::$customer['data_address'] 
		);
		$responsePayment = Doku_Api::doDirectPayment($dataPayment);

		if($responsePayment->res_response_code == '0000') {
			//redirect to desired page.
			// redirect(Doku::$redirectUrl .'?TRANSIDMERCHANT='. $responsePayment->res_response_msg .'&invoice='. $responsePayment->res_trans_id_merchant);
			echo json_encode($responsePayment);
		} else {		
			// payment_failed_redirect();
			echo json_encode($responsePayment);
		}
	}

}
?>
<div class="rblock_fluid section-main_menu">
    <div class="rblock">
        <div class="row">
            <nav class="main_menu">
                <a href="#" class="track-menu"><i class="fa fa-home"></i>HOME</a>
                <a href="#" class="track-menu" ftarget="product"><i class="fa fa-barcode"></i>PRODUCT</a>
                <a href="#" class="track-menu"><i class="fa fa-calendar"></i>EVENT PROMO</a>
                <a href="#" class="track-menu"><i class="fa fa-bookmark"></i>BRAND</a>
                <a href="#" class="track-menu"><i class="fa fa-user"></i>AGEN</a>
                <a href="#" class="track-menu"><i class="fa fa-info-circle"></i>INFO</a>
                <a href="#" class="track-menu"><i class="fa fa-shopping-cart"></i>CART</a>
                <div class="clearfix"></div>
            </nav>
        </div>
    </div>
</div>


<div class="rblock_fluid section-sub_menu" gtarget="product">
    <div class="rblock">
        <div class="row parkers">
            <nav class="tbx-header">
                <?php foreach($tab_link as $r):?>
                <a go-tab="<?php echo 'ptab-'.$r->module_sub_id?>" href="#"><?php echo ucwords($r->module_sub_name)?></a>
                <?php endforeach;?>
                <div class="clearfix"></div>
            </nav>
            <div class="tbx-content">
                <?php foreach($tab_link as $r):?>
                <div class="row tab-data-content" tab-id="<?php echo 'ptab-'.$r->module_sub_id?>" style="background-image:url('<?php echo base_url('assets/img/'.$r->pictures_spark)?>')">
                    <div class="rs3">
                        <h1><?php echo ucwords($r->module_sub_name)?></h1>
                    </div>
                    <div class="rs9">
                        <nav class="nav-item-intab">
                            <?php foreach($r->sub_menu as $v):?>
                            <a href="<?php echo $v->module_item_name?>"><?php echo strtoupper($v->module_item_name)?></a>
                            <?php endforeach;?>
                            <div class="clearfix"></div>
                        </nav>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('components/head'); ?>
<div class="col-lg-12">
<!-- List all products -->
<?php if(!empty($products)){ foreach($products as $row){ ?>
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo base_url('assets/images/'.$row['image']); ?>" >
            <div class="caption">
                <h4 class="pull-right">$<?php echo $row['price']; ?> USD</h4>
                <h4><a href="javascript:void(0);"><?php echo $row['name']; ?></a></h4>
            </div>
            <div class="ratings">
                <a href="<?php echo base_url('products/buy/'.$row['id']); ?>">
                    <img src="<?php echo base_url('assets/images/paypal.png'); ?>" height="75" width="120">
                </a>
                <p class="pull-right">15 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-asterisk"></span>
                    <span class="glyphicon glyphicon-asterisk"></span>
                    <span class="glyphicon glyphicon-asterisk"></span>
                    <span class="glyphicon glyphicon-asterisk"></span>
                    <span class="glyphicon glyphicon-asterisk"></span>
                </p>
            </div>
        </div>
    </div>
<?php } }else{ ?>
    <p>Product(s) not found...</p>
<?php } ?>
</div>
<?php $this->load->view('components/foot'); ?>
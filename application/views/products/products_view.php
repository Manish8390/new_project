<?php $this->load->view('dashbord/header'); ?>
<style>
   
    .products{
        width: 23%;
    }
    .card.card-tale {
        background: #7DA0FA;
        color: #ffffff;
        height: 22rem;
    }
    @media (max-width: 768px){
        .card.card-tale {
            background: #7DA0FA;
            color: #ffffff;
            height: 24rem;
        }  
    }
    .bg_cardimg{
        position: relative;
    }
    .bg_cardimg:hover .text_head{
        display: block;
        display: flex;
        justify-content: center;
    }
    .text_head {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 3px 60px;
        position: absolute;
        bottom: 122px;
        width: 100%;
        display: none;

    }
</style>
<div class="main-panel">
    <div class="row content-wrapper">
        <?php $no=0; foreach ($products as $product) : $no++;?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb-3 stretch-card products">
                <div class="card card-tale bg_cardimg">
                    <img src="<?php echo base_url('uploads/product_imgs/'.$product->upload_Image); ?>"  >
                    <div class="card-body">
                        <p class="mb-4"><?=$product->product_name?></p>
                        <p class="fs-30 mb-2">₹ <?=$product->selling_price?></p>
                        <p>10.00% (ICICI Credit Card)</p>
                    </div>
                    <div class="text_head">
                        <button type="button" name="addToCart" class="btn btn-warning btn-icon-text">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                        <button type="button" name="likeProdect" class="btn btn-outline-info btn-icon-text">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                   </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php $this->load->view('dashbord/footer'); ?> 
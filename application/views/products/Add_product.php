<?php $this->load->view('dashbord/header'); ?>
<div class="main-panel">        
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Product</h4>
                <form class="form-sample" method="post" action="<?php echo base_url('index.php/products/AddProduct') ?>"  enctype='multipart/form-data'>
                    <p class="card-description">Product info</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="product_name" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" name="description"class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select name="category" class="form-control">
                                        <option value="Electronic">Electronic</option>
                                        <option value="Home Appliances">Home Appliances</option>
                                        <option value="Men's Fashion">Men's Fashion</option>
                                        <option value="Women's Fashion">Women's Fashion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Origin Price</label>
                                <div class="col-sm-9">
                                    <input type="number" name="original_price" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Selling Price</label>
                                <div class="col-sm-9">
                                    <input type="number" name="selling_price" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Select Type</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="radio" name="" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>On Sale</label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="radio"  name="" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">On Discount</label>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Product Image</label>
                                <div class="col-sm-9">
                                    <input type="File" class="form-control"  name="gambar" id="images" accept="image/*" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-description">Address</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address_1" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 2</label>
                                <div class="col-sm-9">
                                    <input type="text"  name="address_2" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text"  name="states" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" name="pincode" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Country</label>
                                <div class="col-sm-9">
                                    <select name="country" class="form-control">
                                        <option value="India">India</option>
                                        <option value="America">America</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Russia">Russia</option>
                                        <option value="South Korea">South Korea</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Add</button>
                </form>
            </div>
        </div>
    </dev>
</dev>
<?php $this->load->view('dashbord/footer'); ?>
<?php
// get product by id
$blog_item = $blog->getABlogById($_GET['id'] ?? 1, "blog");
?>


<section class="py-1 my-5">
    <div class="container">
                <h1 class="font-rubik font-size-28"><?php echo $blog_item['title'];?></h1>
        <hr/>

        <div class="row product-img-info-row">

            <div class="col-sm-12 mb-3 w-75 mx-auto mt-2">
                <img
                        src="<?php echo $blog_item['image'];?>"
                        alt="blog image"
                        class="img-fluid rounded"
                />
            </div>
            <div class="col-sm-12 mt-2 font-size-20">
                <p class="font-size-18 font-poppins color-dark">
                    <?php echo $blog_item['description'];?>
                </p>
            </div>
            <div class="col-sm-12 text-center font-size-20">
                <a href="<?php echo $blog_item['url'];?>" target="_blank" class="col-sm-12">Read More...</a>
            </div>
        </div>


    </div>

</section>
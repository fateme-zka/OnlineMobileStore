<?php
$blogs = $product->getDataFromTable('blog');
?>

<!-- Blogs -->
<section id="blogs">
    <div class="container py-4">
        <h4 class="font-rubik font-size-20">
            <a style="color: black;" href="blogs.php">Top 20 Essential Smartphone Blogs</a>
        </h4>
        <hr/>

        <div class="owl-carousel owl-theme">

            <?php foreach ($blogs as $blog): ?>
                <div class="card border-0 font-rale mx-2" style="width: 20rem">
                    <img
                            src="<?php echo $blog['image']; ?>"
                            alt="blog image"
                            class="card-img-top my-2 rounded"
                    />
                    <h5 class="card-title font-size-18"><?php echo $blog['title']; ?></h5>

                    <p class="card-text font-size-14 mt-1 text-black-50 py-1">
                        <?php
                        $description = $blog['description'];
                        echo substr($description,0,200); ?>.....
                    </p>
                    <a href="blog.php?id=<?php echo $blog['id']; ?>"
                       class="color-second text-left my-1">Let's read</a>
                </div>
            <?php endforeach; // closing blogs foreach ?>

        </div>
    </div>
</section>
<!-- !Blogs -->

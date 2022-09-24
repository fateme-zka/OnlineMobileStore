<?php
$blogs = $product->getDataFromTable('blog');
?>


<!-- Start MAIN  ----------------------------------------------->
<main id="main-site">
    <!-- Blogs -->
    <section id="blogs">
        <div class="container py-4">
            <h1 class="font-rubik font-size-28">Top 20 Essential Smartphone Blogs</h1>
            <hr/>

            <div class="blog-items grid">
                <?php foreach ($blogs as $blog): ?>
                    <div class="grid-item item border rounded my-3 mx-1">
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
                    </div>
                <?php endforeach; // closing blogs foreach ?>
            </div>
        </div>
    </section>
    <!-- !Blogs -->
</main>
<!-- End MAIN -->
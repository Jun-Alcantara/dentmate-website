<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Happy Patients - Dentmate</title>
  <?php include_once('partials/head.php'); ?>
</head>
<body class="bg-white">
  <?php include_once('partials/navigation.php'); ?>
  
  <section>
    <div class="max-w-screen-xl mx-auto py-[70px]">
      
      <h1 class="text-3xl text-fontPrimary font-bold mb-[40px]">
        Our Happy Patients
      </h1>

      <div>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
          <div class="flex mb-[70px] <?php if ($i % 2 === 0) { echo 'flex-row-reversexx'; } ?>" data-aos="slide-up">
            <div>
              <img class="w-full h-auto aspect-square object-cover rounded-md" src="https://ui-avatars.com/api/?background=random&size=300&name=Elon Musk&q=<?php echo uniqid(); ?>" alt="">
            </div>
            <div class="<?php if ($i % 2 === 0) { echo 'right-quotexx'; } else { echo 'left-quotexx'; } ?>"></div>
            <div class="testimonial">
              <blockquote>
                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
              </blockquote>
              <div></div>
              <p>
                John Doe &mdash; Worcestershire, UK
              </p>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
      <nav aria-label="Page navigation example">
        <ul class="list-style-none flex justify-center">
          <li>
            <a
              class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100"
              href="#"
              >Previous</a
            >
          </li>
          <li>
            <a
              class="relative block rounded px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 font-bold !bg-fontSecondary"
              href="#"
              >1</a
            >
          </li>
          <li aria-current="page">
            <a
              class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100"
              href="#"
              >2</a
            >
          </li>
          <li>
            <a
              class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100"
              href="#"
              >3</a
            >
          </li>
          <li>
            <a
              class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100"
              href="#"
              >Next</a
            >
          </li>
        </ul>
      </nav>

    </div>
  </section>

  <?php include_once('partials/footer.php'); ?>
  <?php include_once('partials/script.php'); ?>
</body>
</html>
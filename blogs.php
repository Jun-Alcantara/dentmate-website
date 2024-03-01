<html>
  <head>
    <?php include_once('partials/head.php'); ?>
    <style>
      #doctors-banner {
        height: calc(100vh - 77px);
      }
    </style>
  </head>
  <body class="bg-gray-100">
    <?php include_once('partials/navigation.php'); ?>

    <section>
      <div id="doctors-banner" class="overflow-hidden">
        <div class="relative">
          <img src="/images/doctors/doc3.jpeg" alt="Doctor's">
          <div class="absolute w-full h-full top-0 bg-black/50 flex items-center">
            <div class="pl-[90px]">
              <div data-aos="fade-right">
                <h1 class="text-white text-[5rem] font-bold">Blogs</h1>
                <h3 class="text-white text-3xl">#DentalHealthMatters</h3>
              </div>
            </div>
          </div>
        </div>
        <div>
          <img src="/images/doctors/doc2.jpeg" alt="Doctor's">
        </div>
        <div>
          <img src="/images/doctors/doc3.jpeg" alt="Doctor's">
        </div>
        <div>
          <img src="/images/doctors/doc4.jpeg" alt="Doctor's">
        </div>
        <div>
          <img src="/images/doctors/doc5.jpeg" alt="Doctor's">
        </div>
      </div>
    </section>

    <article id="brand-story">
      <div class="max-w-screen-xl mx-auto">

        <?php for ($i = 1; $i <= 5; $i++) { ?>
          <div class="flex py-[20px] pt-[50px]" data-aos="fade-left">
            <div class="basis-[25%]">
              <div class="aspect-square border-2 boreder-red">
                Photo Here
              </div>
            </div>
            <div class="basis-[75%] pl-[1.5rem]">
              <h3 class="text-primary font-semibold text-3xl mb-5">Blog Title <?=$i?></h3>
              <p class="mb-5">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores debitis porro illum impedit perferendis enim aspernatur, iste consectetur incidunt harum, esse quaerat ratione culpa itaque maxime aperiam assumenda doloribus amet.
                Eum accusamus tenetur nobis quod nisi iure ipsa, commodi dolores, a consequatur quam esse illo id eos debitis corporis placeat praesentium? Amet quod ab quasi enim obcaecati. Incidunt, alias quisquam.
              </p>
              <a href="#" class="inline-block bg-primary rounded-md text-white px-[20px] py-[10px]">
                  Read More
              </a>
            </div>
          </div>
        <?php } ?>

        <nav aria-label="Page navigation example" class="flex justify-center pb-[50px]">
          <ul class="inline-flex -space-x-px text-sm">
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
            </li>
            <li>
              <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-white border border-gray-300 bg-primary">3</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
            </li>
            <li>
              <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
            </li>
          </ul>
        </nav>

      </div>
    </article>

    <?php include_once('partials/booking-form.php'); ?>

    <?php include_once('partials/footer.php'); ?>
    <?php include_once('partials/script.php'); ?>
    <script>
        
    </script>
  </body>
</html>
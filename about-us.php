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
      <div class="w-full">
        <div class="relative about-us-banner-container">
          <img class="w-full h-full object-cover" src="/images/banners/about-us-cover.jpeg" alt="Doctor's">
          <div class="absolute w-full h-full top-0 bg-black/50 flex pl-[90px] pb-[90px] items-end">
            <div>
              <h1 class="text-white text-[5rem] font-bold" data-aos="fade-right">Meet the team!</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <article id="brand-story" class="bg-white">
      <div class="max-w-screen-xl mx-auto">
        <div class="flex py-[90px]" data-aos="fade-left">
          <div class="basis-[25%]">
            <div class="aspect-square border-2 boreder-red">
              Photo Here
            </div>
          </div>
          <div class="basis-[75%] pl-[1.5rem]">
            <h3 class="text-primary font-semibold text-3xl mb-5">Our Story</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores debitis porro illum impedit perferendis enim aspernatur, iste consectetur incidunt harum, esse quaerat ratione culpa itaque maxime aperiam assumenda doloribus amet.
              Eum accusamus tenetur nobis quod nisi iure ipsa, commodi dolores, a consequatur quam esse illo id eos debitis corporis placeat praesentium? Amet quod ab quasi enim obcaecati. Incidunt, alias quisquam.
            </p>
            <br>
            <p>
              Modi, alias? Placeat totam blanditiis quasi, aliquid, optio soluta suscipit dolorum veritatis rem nihil ipsam veniam provident iure earum. Tempora consectetur odit fugiat odio. Sapiente culpa nihil quis vitae facilis.
            </p>
          </div>
        </div>

        <div class="flex" data-aos="fade-right">
          <div class="basis-[75%] pl-[1.5rem]">
            <h3 class="text-primary font-semibold text-3xl mb-5">Founders Story</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores debitis porro illum impedit perferendis enim aspernatur, iste consectetur incidunt harum, esse quaerat ratione culpa itaque maxime aperiam assumenda doloribus amet.
              Eum accusamus tenetur nobis quod nisi iure ipsa, commodi dolores, a consequatur quam esse illo id eos debitis corporis placeat praesentium? Amet quod ab quasi enim obcaecati. Incidunt, alias quisquam.
            </p>
            <br>
            <p>
              Modi, alias? Placeat totam blanditiis quasi, aliquid, optio soluta suscipit dolorum veritatis rem nihil ipsam veniam provident iure earum. Tempora consectetur odit fugiat odio. Sapiente culpa nihil quis vitae facilis.
            </p>
          </div>
          <div class="basis-[25%]">
            <div class="aspect-square border-2 boreder-red">
              Photo Here
            </div>
          </div>
        </div>

        <div class="flex flex-wrap justify-center pb-[90px] pt-[30px]">
          <?php for ($i = 1; $i <= 4; $i++) { ?>
            <div class="basis-[25%] p-[20px] flex flex-col" data-aos="fade-up">
              <img class="aspect-square rounded-full border-[3px] border-primary object-cover" src="./images/doctors-avatar/doc<?=$i?>.jpeg" alt="Placeholder">
            </div>
          <?php } ?>
        </div>

      </div>
    </article>
    
    <div class="pt-[70px]">
      <?php include_once('partials/branches.php'); ?>
    </div>

    <article id="management" class="bg-white pt-[50px]">
      <div class="max-w-screen-xl mx-auto pb-[40px] q">
        <h3 class="text-3xl text-primary font-semibold text-center mb-[40px]">Management</h3>
        <div class="flex flex-wrap justify-center">
          <?php for ($i = 1; $i <= 8; $i++) { ?>
            <div class="basis-[25%] p-[20px] flex flex-col" data-aos="fade-up">
              <img class="aspect-square rounded-full border-[3px] border-primary object-cover" src="./images/doctors-avatar/doc<?=$i?>.jpeg" alt="Placeholder">
            </div>
          <?php } ?>
        </div>
      </div>
    </article>

    <?php include_once('partials/booking-form.php'); ?>

    <?php include_once('partials/footer.php'); ?>
    <?php include_once('partials/script.php'); ?>
    <script>
        
    </script>
  </body>
</html>
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
        <div>
          <img src="/images/doctors/doc1.jpeg" alt="Doctor's">
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

    <section>
      <div class="max-w-screen-xl mx-auto gap-[60px] py-[90px] pb-[0px]">
        <div class="flex gap-[20px] mb-[80px]">
          <div class="basis-3/12">
            <img class="aspect-square object-cover" src="./images/doctors/doc-justin.jpeg" alt="Doc Justin">
          </div>
          <div class="basis-9/12">
            <h3 class="text-3xl font-semibold mb-5">Doctor Justin</h3>
            <p class="mb-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic deleniti optio, voluptas commodi architecto reiciendis nostrum beatae laudantium in laborum excepturi voluptate velit voluptatum. Quaerat quia eaque quam tempora vero.
            </p>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur ex ab quae reprehenderit repellat rerum sapiente quam? Enim obcaecati, consequuntur magnam aspernatur voluptas quo at, neque, iure asperiores dicta ullam?
              Autem excepturi omnis deserunt nihil dignissimos iure repellat recusandae. Saepe nesciunt dolores nam, non aspernatur, quae natus minus beatae deserunt quidem libero, illum quasi! Sapiente vel ex cupiditate quae. Officiis.
            </p>
          </div>
        </div>

        <div class="flex flex-wrap justify-center">
          <?php for ($i = 1; $i <= 20; $i++) { ?>
            <div class="basis-[25%] p-[20px]">
              <img class="aspect-square rounded-full" src="./images/doctors/doc-placeholder.png" alt="Placeholder">
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <?php include_once('partials/booking-form.php'); ?>

    <?php include_once('partials/footer.php'); ?>
    <?php include_once('partials/script.php'); ?>
    <script>
      $('#doctors-banner').slick({
        arrows: false,
        autoPlay: true,
        autoplaySpeed: 1500
      });
    </script>
  </body>
</html>
<!-- Landing Area -->
<section id="landing-area" class="mb-40" aria-label="Landing Area">
    <div class="px-6 py-12 md:px-12 bg-gray-100 text-gray-800 text-center lg:text-left" aria-label="Landing Area Main Section">
      <div class="container mx-auto xl:px-32">
        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
          <div class="mt-12 lg:mt-0">
            <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12" aria-label="Landing Area Heading">
                <?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?>
            </h2>
            <h3 class="text-3xl md:text-4xl xl:text-5 traking-tight mb-12 text-red-600">
                Were Sorry, But something seems to be wrong.Try again later.
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>

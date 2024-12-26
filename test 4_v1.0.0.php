<!DOCTYPE html>
<html lang="en">
    <head>
        <title>test 4</title>
        <meta content="Default page description" name="description"/>
        <meta content="test 4" property="og:title"/>
        <meta content="Default page description" property="og:description"/>
        <meta content="<?php echo BASE_URL_IMAGE; ?>main/img/og/DEFAULT_PAGE_IMAGE.jpg" property="og:image"/>
        <meta content="<?php echo BASE_URL; ?>test 4" property="og:url"/>
        <?php include("tailwind/template/link-css.php"); ?>
        <link as="style" link="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" onload="this.onload=null;this.rel='stylesheet'" rel="preload"/>
        WebPage
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "WebSite",
                        "@id": "<?php echo BASE_URL; ?>#website",
                        "url": "<?php echo BASE_URL; ?>",
                        "name": "Bacancy",
                        "description": "Top product development company with Agile methodology. Hire software developers to get complete product development solution from the best agile software development company.",
                        "potentialAction": [
                            {
                                "@type": "SearchAction",
                                "target": {
                                    "@type": "EntryPoint",
                                    "urlTemplate": "<?php echo BASE_URL; ?>?s={search_term_string}"
                                },
                                "query-input": "required name=search_term_string"
                            }
                        ],
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "WebPage",
                        "@id": "<?php echo BASE_URL; ?>test-4/#webpage",
                        "url": "<?php echo BASE_URL; ?>test-4/",
                        "name": "test 4",
                        "isPartOf": {
                            "@id": "<?php echo BASE_URL; ?>#website"
                        },
                        "datePublished": "2013-04-15T13:23:16+00:00",
                        "dateModified": "2024-07-17T14:31:52+00:00",
                        "description": "Default page description"
                    }
                ]
            }
        </script>
        BreadcrumbList
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": []
            }
        </script>
    </head>
    <body>
        <section class="banner banner-post header-top text-center">
            <img alt="" class="banner-post-img" data-src="<?php echo BASE_URL_IMAGE; ?>main-boot-5/images/home/banner.jpg" height="900" loading="eager" src="<?php echo BASE_URL_IMAGE; ?>main-boot-5/images/home/banner.jpg" title="" width="1900"/>
            <div class="content container">
                <div class="cont-padding text-center">
                    <h1 class="text-dark">Heading Heading</h1>
                    <p>Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description</p>
                </div>
                <div class="grid grid-cols-subgrid gap-6 sm:grid-cols-2 md:grid-cols-3 md:[&>div:not(:last-child)]:border-r md:[&>div:not(:last-child)]:pr-2">
                    <div>
                        <p class="text-h3 font-bold text-primary mb-0">10 Years</p>
                        <p>Text Text Text</p>
                    </div>
                    <div>
                        <p class="text-h3 font-bold text-primary mb-0">1000+</p>
                        <p>Text Text Text</p>
                    </div>
                    <div>
                        <p class="text-h3 font-bold text-primary mb-0">100+</p>
                        <p>Text Text Text</p>
                    </div>
                </div>
                <a class="btn btn-outline-primary mt-md" href="#form">Button Text</a>
            </div>
        </section>
        <?php include("template/common_js-tailwind.php"); ?>
  <?php include("tailwind/template/link-js.php"); ?>
  <?php include("main-boot-5/templates/localbusiness-schema.php"); ?>
  <?php include("main-boot-5/templates/chat-script.php"); ?>
        <script defer="" src="<?php echo BASE_URL; ?>tailwind/js/slider-one-item.js?V-7">
        </script>
        <script defer="" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript">
        </script>
    </body>
</html>
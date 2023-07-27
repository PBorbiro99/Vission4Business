<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Cover Template · Bootstrap v5.1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    <!-- Bootstrap core CSS -->
    <link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/features.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg-light">

<div class="d-flex w-100 h-100 mx-auto flex-column">
    <header class="container-fluid bg-white">
        <div class="bg-white">
            <img src="<?=ROOT?>/assets/images/users/<?=$username?>.png" alt="<?=$username?>">
            <div class="col-lg-6 mx-auto">
            </div>
        </div>
    </header>
    <main class="container-fluid" style="background-image: url('<?=ROOT?>/assets/images/2950.jpg');">
        <div id="container" class="p-1 container bg-white" style="height: 100vh; box-shadow: inset 0px 20px 1rem 0px rgb(0 0 0 / 50%);">
            <div class=" p-4 m-4"></div>
            <div class="d-flex flex-row align-items-end justify-content-center">
                <div class="fs-3 mx-auto" style="color: #D2AF70">0%</div>
                <div class="w-75">
                    <div class="w-100 mx-auto">
                        <div class="w-100 mx-auto" style="background-color:transparent;">
                            <div class="progress-bar d-flex flex-row-reverse justify-content-start" role="progressbar" style="overflow: visible;background-color:transparent;width: <?=($units_now/$units)*100?>%" aria-valuenow="<?=$units_now?>" aria-valuemin="0" aria-valuemax="<?=$units?>>">
                                <div class="px-2 d-flex position-relative fs-3" style="border-right: 2px solid #D2AF70; color: #D2AF70"><?=$units_now?></div>
                            </div>
                        </div>
                    </div>


                    <div class="w-100 mx-auto d-inline-flex flex-row">

                        <div class="progress w-100 mx-auto" style="background-color:#968870;">

                            <div class="progress-bar d-flex flex-row-reverse justify-content-start" role="progressbar" style="background-color:#D2AF70;width: <?=($units_now/$units)*100?>%" aria-valuenow="<?=$units_now?>" aria-valuemin="0" aria-valuemax="<?=$units?>>"></div>

                        </div>
                    </div>
                </div>
                <div class="fs-3 mx-auto" style="color: #D2AF70">100%</div>
            </div>
            <div class="p-4 m-4"></div>
            <div class="mx-auto d-flex justify-content-center gap-3" style="color: #D2AF70">
                <div>
                    <p class="fs-1" id="days"></p>
                    <p class="fs-4" id="days_label">Days</p>
                </div>
                <div>
                    <p class="fs-1" id="hours"></p>
                    <p class="fs-4" id="hours_label">Hours</p>
                </div>
                <div>
                    <p class="fs-1" id="mins"></p>
                    <p class="fs-4" id="mins_label">Mins</p>
                </div>
                <div>
                    <p class="fs-1" id="secs"></p>
                    <p class="fs-4" id="secs_label">Secs</p>
                </div>
            </div>
            <div class="p-4 m-4"></div>
            <form id="form" action="home" method="post" class="input-group mx-auto input-group-lg" style="max-width: 200px;">
                <label for="subtract" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-minus"></i>
                </label>
                <input id="subtract" name="operation" class="d-none" type="submit">
                <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons" name="units_now">
                <label for="add" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-plus"></i>
                </label>
                <input id="add" name="operation" value="add" class="d-none" type="submit">
            </form>
            <div class="p-4 m-4"></div>
<!--            <div class="container px-4 py-5" id="featured-3">-->
<!--                <h2 class="pb-2 border-bottom">Columns with icons</h2>-->
<!--                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">-->
<!--                    <div class="feature col">-->
<!--                        <div class="feature-icon bg-primary bg-gradient">-->
<!--                            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>-->
<!--                        </div>-->
<!--                        <h2>Featured title</h2>-->
<!--                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>-->
<!--                        <a href="#" class="icon-link">-->
<!--                            Call to action-->
<!--                            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="feature col">-->
<!--                        <div class="feature-icon bg-primary bg-gradient">-->
<!--                            <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>-->
<!--                        </div>-->
<!--                        <h2>Featured title</h2>-->
<!--                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>-->
<!--                        <a href="#" class="icon-link">-->
<!--                            Call to action-->
<!--                            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="feature col">-->
<!--                        <div class="feature-icon bg-primary bg-gradient">-->
<!--                            <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>-->
<!--                        </div>-->
<!--                        <h2>Featured title</h2>-->
<!--                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>-->
<!--                        <a href="#" class="icon-link">-->
<!--                            Call to action-->
<!--                            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </main>
    <footer class=" col-lg-6 mt-auto text-white-50">
    </footer>
</div>

<script>
    date = new Date("<?=$deadline?>");
    console.log(date)
</script>
<script src="<?=ROOT?>/assets/js/home.js"></script>
</body>
</html>

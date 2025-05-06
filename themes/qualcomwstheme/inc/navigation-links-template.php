<?php
function navigationTemplate($args = []): void
{
    $nav_items = $args['nav_items'];
    $user_links = $args['user_links'];
    ?>
    <!-- Menu PANEL: navigation links, close icons -->
    <div id="nav-menu"
         class="absolute left-[-100%] top-0 z-20 min-h-[90vh] w-full overflow-hidden border-b-2 border-emerald-800 bg-dark_blue px-5 duration-500 ease-out md:w-1/2 md:px-10 lg:static lg:min-h-fit lg:w-auto lg:border-0 lg:bg-transparent">
        <!-- ###### NAVIGATION Links #####  -->
        <ul class="flex flex-col items-start md:gap-6 xl:gap-10 pt-24 lg:flex-row lg:items-center lg:pt-0">
            <?php foreach ($nav_items as $item): ?>
                <li class="<?= check_active_condition($item['condition']) ? 'active' : 'nav-link' ?>">
                    <a href="<?= $item['url'] ?>" class="flex items-center whitespace-nowrap">
                        <?= $item['title'] ?>
                        <?php if ($item['has_arrow']): ?>
                            <i class="ri-arrow-down-s-line ml-1"></i>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Close menu icon mobile version -->
        <div class="absolute right-5 top-5 cursor-pointer text-xl text-slate-200 sm:text-2xl lg:hidden">
            <i class="ri-close-large-line" id="close-icon"></i>
        </div>

        <!-- Top right icons for MOBILE version -->
        <div class="flex cursor-pointer items-center gap-5 pt-20 lg:hidden">
            <?php foreach ($user_links as $link): ?>
                <a class="<?= $link['class'] ?>" href="<?= $link['url'] ?>"><?= $link['title'] ?></a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Top right icons DESKTOP -->
    <div class="flex cursor-pointer items-center gap-5 text-xl sm:text-2xl lg:self-center">
        <i class="ri-search-line js-search-trigger hover:text-primary_yellow"></i>

        <?php foreach ($user_links as $link): ?>
            <a class="<?= $link['class'] ?> hidden lg:block" href="<?= $link['url'] ?>"><?= $link['title'] ?></a>
        <?php endforeach; ?>
    </div>

<?php } ?>
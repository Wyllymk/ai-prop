<?php
/**
 * The template for displaying Front Page
 *
 * This is the template that displays front page by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ai_Prop
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="relative flex min-h-screen flex-col justify-between bg-black text-white">
    <main class="size-full">

        <!-- Menu Navigation -->
        <?php get_template_part( 'template-parts/content/content', 'header' ); ?>

        <!-- Sidebar Navigation -->
        <div id="navMenu"
            class="bg-black fixed top-0 z-51 h-full w-60 -translate-x-full transform p-4 shadow-lg transition-all duration-300 ease-in-out pointer-events-none md:hidden">
            <!-- Overlay (darkens the image) -->
            <div class="absolute z-52 bg-black"></div>
            <!-- Your navigation items here -->
            <?php get_template_part( 'template-parts/content/content', 'aside' ); ?>
        </div>

        <!-- Overlay for Sidebar -->
        <div id="overlay" class="fixed inset-0 z-50 hidden h-screen bg-black/90"></div>

        <!-- Hero Section -->
        <section id="home"
            class="hero h-200 lg:h-250 xl:h-280 2xl:h-300 -mt-16 mb-5 md:mb-10 w-full relative flex flex-col flex-nowrap align-center justify-between z-10 px-4 md:p-0 md:min-h-screen bg-hero bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div
                class="z-22 md:p-8 mt-30 lg:mt-20 flex flex-col items-center justify-center space-y-4 xl:space-y-4 text-center text-white">
                <!-- Hero Content -->
                <div class="w-fit">
                    <div class="relative flex mx-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="star"
                            class="w-full">
                    </div>
                    <div
                        class="py-2 px-10 rounded-[32px] border border-[#5CDB95] bg-[radial-gradient(70.71%_70.71%_at_50%_50%,rgba(0,0,0,0.5)_50.03%,#5CDB95_100%)]  bg-[rgba(255,255,255,0.1)]">
                        <?php esc_html_e( 'Backed by the Coinstrat Pro', 'ai_prop' ); ?>
                    </div>
                </div>
                <h1 class="text-4xl font-bold leading-tight md:text-6xl">
                    <?php esc_html_e( 'We Fund You ', 'ai_prop' ); ?><br>
                    <?php esc_html_e( 'You Trade Like a Pro.', 'ai_prop' ); ?>
                </h1>
                <p class="text-lg xl:w-2/3">
                    <?php esc_html_e( "Pass our challenge, get funded, and trade with real capital.", 'ai_prop' ); ?>
                </p>
                <div class="flex items-center space-x-4">
                    <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                        class="flex items-center justify-between whitespace-nowrap text-lg rounded-lg bg-gradient-to-r from-green-400 -from-28% to-blue-900 to-127% px-4 py-2 hover:drop-shadow-ai-green transition duration-300 ease-in-out">
                        <?php esc_html_e( 'Get Funded Now', 'ai_prop' ); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"
                            alt="arrow-right" class="h-7">
                    </a>
                </div>
            </div>
            <div class="z-22 flex w-full flex-col items-center justify-center space-y-6 mt-10 lg:mt-0">
                <div class="relative flex mx-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/laptop.png" alt="laptop"
                        class="w-full">
                </div>
            </div>

        </section>

        <!-- Companies Section -->
        <section class="w-full relative flex flex-col flex-nowrap align-center justify-center p-4 overflow-hidden">
            <p class="text-center text-base mb-20">
                <?php esc_html_e( "TRUSTED BY TEAMS AT THE WORLD'S LEADING COMPANIES", 'ai_prop' ); ?>
            </p>
            <!-- Scroll Companies -->
            <div x-data="scrollItem" class="relative w-full flex items-center justify-center overflow-hidden">
                <!-- Left Fade -->
                <div
                    class="absolute top-0 left-0 w-30 md:w-100 h-full bg-gradient-to-r from-black to-transparent pointer-events-none z-10">
                </div>
                <!-- Right Fade -->
                <div
                    class="absolute top-0 right-0 w-30 md:w-100 h-full bg-gradient-to-l from-black to-transparent pointer-events-none z-10">
                </div>

                <div class="w-full" x-ref="scrollContainer">
                    <div class="flex items-center justify-center space-x-4 md:space-x-8" x-ref="scrollInnerWrapper">
                        <!-- Greencap -->
                        <div class="relative scroll-item flex-shrink-0">
                            <img class="w-full"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/greencap.png"
                                alt="greencap">
                        </div>
                        <!-- Coinstrat -->
                        <div class="relative scroll-item flex-shrink-0">
                            <img class="w-full"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/coinstrat.png"
                                alt="coinstrat">
                        </div>
                        <!-- Marketwatch -->
                        <div class="relative scroll-item flex-shrink-0">
                            <img class="w-full"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/marketwatch.png"
                                alt="marketwatch">
                        </div>
                        <!-- Bitcoin -->
                        <div class="relative scroll-item flex-shrink-0">
                            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/img/bitcoin.png"
                                alt="bitcoin">
                        </div>
                        <!-- Ethereum -->
                        <div class="relative scroll-item flex-shrink-0">
                            <img class="w-full"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/ethereum.png"
                                alt="Ethereum">
                        </div>
                        <!-- Tradebot -->
                        <div class="relative scroll-item flex-shrink-0">
                            <img class="w-full"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/tradebot.png"
                                alt="Tradebot">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Allocation Section -->
        <section
            class="font-manrope w-full mx-auto max-w-7xl space-y-4 md:space-y-0 space-x-0 md:space-x-5 my-20 relative flex flex-wrap md:flex-nowrap align-center justify-center p-4 bg-ai-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div class="md:w-1/3 flex items-center justify-between text-center md:h-40">
                <!-- left -->
                <div class="h-full">
                    <img class="w-full h-full object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/left.png" alt="left">
                </div>

                <div class="bg-ai-navy-green/10 px-5 xl:px-10 flex flex-col space-y-4 justify-center items-center z-20">
                    <h3 class="text-3xl md:text-4xl font-bold">
                        <?php esc_html_e( '200+', 'ai_prop' ); ?>
                    </h3>
                    <p class="text-base text-white/50 whitespace-nowrap">
                        <?php esc_html_e( 'Maximum Allocation', 'ai_prop' ); ?>
                    </p>
                </div>

                <!-- right -->
                <div class="h-full">
                    <img class="h-full object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/right.png" alt="right">
                </div>
            </div>
            <div class="md:w-1/3 flex items-center justify-between text-center md:h-40">
                <!-- left -->
                <div class="h-full">
                    <img class="h-full object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/left.png" alt="left">
                </div>

                <div
                    class="bg-ai-navy-green/10 px-16 xl:px-20 flex flex-col space-y-4 justify-center items-center z-20">
                    <h3 class="text-3xl md:text-4xl font-bold">
                        <?php esc_html_e( '1.5K', 'ai_prop' ); ?>
                    </h3>
                    <p class="text-base text-white/50">
                        <?php esc_html_e( 'Pairs', 'ai_prop' ); ?>
                    </p>
                </div>

                <!-- right -->
                <div class="h-full">
                    <img class="h-full object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/right.png" alt="right">
                </div>
            </div>
            <div class="md:w-1/3 flex items-center justify-between text-center md:h-40">
                <!-- left -->
                <div class="h-full">
                    <img class="h-full object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/left.png" alt="left">
                </div>

                <div
                    class="bg-ai-navy-green/10 px-12 xl:px-20 flex flex-col space-y-4 justify-center items-center z-20">
                    <h3 class="text-3xl md:text-4xl font-bold">
                        <?php esc_html_e( '$5M', 'ai_prop' ); ?>
                    </h3>
                    <p class="text-base text-white/50 whitespace-nowrap">
                        <?php esc_html_e( 'Scaling Plan', 'ai_prop' ); ?>
                    </p>
                </div>

                <!-- right -->
                <div class="h-full">
                    <img class="h-full object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/right.png" alt="right">
                </div>
            </div>
        </section>

        <!-- How it works Section -->
        <section
            class="w-full mx-auto max-w-5xl flex flex-col flex-nowrap align-center justify-center p-4 bg-ai-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <h5 class="text-center md:text-start text-ai-green text-sm md:text-base mb-10">
                <?php esc_html_e( 'HOW IT WORKS', 'ai_prop' ); ?>
            </h5>
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-5">
                <h2 class="text-center md:text-start text-3xl font-bold leading-tight md:text-4xl font-manrope">
                    <?php esc_html_e( 'Becoming a AI Prop', 'ai_prop' ); ?><br>
                    <?php esc_html_e( 'Funded Trader', 'ai_prop' ); ?>
                </h2>
                <div class="flex items-center space-x-4">
                    <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                        class="flex items-center justify-between whitespace-nowrap text-lg rounded-lg bg-gradient-to-r from-green-400 -from-28% to-blue-900 to-127% px-4 py-2 hover:drop-shadow-ai-green transition duration-300 ease-in-out">
                        <?php esc_html_e( 'Get Funded Now', 'ai_prop' ); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"
                            alt="arrow-right" class="h-7">
                    </a>
                </div>
            </div>
            <div class="evaluation-container grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 lg:mt-10 w-full max-w-5xl">
                <!-- 1 -->
                <div
                    class="evaluation-left relative flex flex-col justify-between h-100 md:h-150 rounded-xl space-y-4 bg-ai-blue border border-ai-blue-2 overflow-hidden">
                    <!-- Top Image -->
                    <div class="absolute top-0 w-full z-10">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top.png" alt="top"
                            class="object-cover w-full h-auto">
                    </div>
                    <!-- Body -->
                    <div class="flex flex-col justify-start space-y-4 p-3 md:p-6 z-20">
                        <div class="space-y-2 flex justify-center flex-col">
                            <h4 class="text-xl font-manrope">
                                <?php esc_html_e( 'Select a Challenge', 'ai_prop' ); ?>
                            </h4>
                            <p class="text-base text-white/75">
                                <?php esc_html_e( 'Choose your path to prove your trading skills and move one step closer to getting funded.', 'ai_prop' ); ?>
                            </p>
                        </div>
                    </div>
                    <!-- Scroll Challenges -->
                    <div x-data="scrollChallenge"
                        class="w-full flex items-center justify-center overflow-hidden z-20 font-kode-mono">
                        <div class="w-full" x-ref="scrollContainer">
                            <div class="flex items-center justify-center space-x-4 md:space-x-8"
                                x-ref="scrollInnerWrapper">
                                <!-- 10K -->
                                <div
                                    class="scroll-item flex-shrink-0 px-4 py-2 bg-white/5 border border-white/10 rounded-lg">
                                    <h5 class="text-xl text-center drop-shadow-white-glow">
                                        <?php esc_html_e( '10K', 'ai_prop' ); ?>
                                    </h5>
                                </div>
                                <!-- 25K -->
                                <div
                                    class="scroll-item flex-shrink-0 px-4 py-2 bg-white/5 border border-white/10 rounded-lg">
                                    <h5 class="text-xl text-center drop-shadow-white-glow">
                                        <?php esc_html_e( '20K', 'ai_prop' ); ?>
                                    </h5>
                                </div>
                                <!-- 50K -->
                                <div
                                    class="scroll-item flex-shrink-0 px-4 py-2 bg-white/5 border border-white/10 rounded-lg">
                                    <h5 class="text-xl text-center drop-shadow-white-glow">
                                        <?php esc_html_e( '50K', 'ai_prop' ); ?>
                                    </h5>
                                </div>
                                <!-- 100K -->
                                <div
                                    class="scroll-item flex-shrink-0 px-4 py-2 bg-white/5 border border-white/10 rounded-lg">
                                    <h5 class="text-xl text-center drop-shadow-white-glow">
                                        <?php esc_html_e( '100K', 'ai_prop' ); ?>
                                    </h5>
                                </div>
                                <!-- 150K -->
                                <div
                                    class="scroll-item flex-shrink-0 px-4 py-2 bg-white/5 border border-white/10 rounded-lg">
                                    <h5 class="text-xl text-center drop-shadow-white-glow">
                                        <?php esc_html_e( '150K', 'ai_prop' ); ?>
                                    </h5>
                                </div>
                                <!-- 200K -->
                                <div
                                    class="scroll-item flex-shrink-0 px-4 py-2 bg-white/5 border border-white/10 rounded-lg">
                                    <h5 class="text-xl text-center drop-shadow-white-glow">
                                        <?php esc_html_e( '200K', 'ai_prop' ); ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Image -->
                    <div class="absolute bottom-0 w-full z-10">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom.png" alt="bottom"
                            class="w-full h-auto object-cover">
                    </div>
                </div>
                <div class="grid grid-rows-2 gap-6">
                    <!-- 2 -->
                    <div
                        class="evaluation-right relative flex justify-start h-70 rounded-xl space-x-4 bg-ai-blue border border-ai-blue-2 overflow-hidden">
                        <!-- Top Image -->
                        <div class="absolute -top-15 w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top.png" alt="top"
                                class="object-cover w-full h-auto">
                        </div>
                        <!-- Body -->
                        <div class="space-y-2 flex justify-start flex-col z-20 p-3 md:p-6">
                            <h4 class="text-xl font-manrope">
                                <?php esc_html_e( 'Prove Your Skills', 'ai_prop' ); ?>
                            </h4>
                            <p class="text-base text-white/50">
                                <?php esc_html_e( 'Use AI-powered analysis and expert coaching to sharpen your strategy, refine your trades, and show you’ve got what it takes to succeed.', 'ai_prop' ); ?>
                            </p>
                        </div>
                        <div
                            class="absolute bottom-5 left-1/2 -translate-x-1/2 w-1/2 h-25 flex flex-col bg-white/5 border border-white/10 rounded-lg z-20">
                            <h6 class="text-sm text-start ps-4 pt-2 font-space-grotesk">
                                <?php esc_html_e( 'Profit Target', 'ai_prop' ); ?>
                            </h6>
                            <h5 class="text-xl text-start drop-shadow-white-glow font-kode-mono ps-4">
                                <?php esc_html_e( '$1,110.54', 'ai_prop' ); ?>
                            </h5>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line.png" alt="line"
                                class="w-full h-auto object-cover">
                        </div>
                        <!-- Bottom Image -->
                        <div class="absolute bottom-0 w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-2.png" alt="bottom"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>
                    <!-- 3 -->
                    <div
                        class="evaluation-right relative flex justify-start h-70 rounded-xl space-x-4 bg-ai-blue border border-ai-blue-2 overflow-hidden">
                        <!-- Top Image -->
                        <div class="absolute -top-10 w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top.png" alt="top"
                                class="object-cover w-full h-auto">
                        </div>
                        <!-- Body -->
                        <div class="space-y-2 flex justify-start flex-col z-20 p-3 md:p-6">
                            <h4 class="text-xl font-manrope">
                                <?php esc_html_e( 'Get Funded', 'ai_prop' ); ?>
                            </h4>
                            <p class="text-base text-white/50">
                                <?php esc_html_e( 'Once you pass the evaluation, we fund you immediately. Focus on trading while we handle the rest', 'ai_prop' ); ?>
                            </p>
                        </div>
                        <div class="absolute bottom-0 w-full flex flex-col items-center justify-center z-20">
                            <h5 class="text-xl text-center font-space-grotesk">
                                <?php esc_html_e( 'Account Balance', 'ai_prop' ); ?>
                            </h5>
                            <h4 class="text-2xl text-center drop-shadow-white-glow font-kode-mono">
                                <?php esc_html_e( '$101,110.54', 'ai_prop' ); ?>
                            </h4>
                        </div>
                        <!-- Bottom Image -->
                        <div class="absolute bottom-0 w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-3.png" alt="bottom"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing"
            class="w-full mx-auto max-w-7xl my-20 md:my-40 flex flex-col md:flex-row space-y-5 md:space-y-0 align-center justify-center p-4 bg-ai-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div class="flex flex-col items-center md:items-start justify-start space-y-4 w-full md:w-1/3">
                <h5 class="text-center md:text-start text-ai-green text-sm md:text-base mb-10">
                    <?php esc_html_e( 'OUR PRICING PLAN', 'ai_prop' ); ?>
                </h5>
                <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-5">
                    <h2 class="text-center md:text-start text-3xl font-bold leading-tight md:text-4xl font-manrope">
                        <?php esc_html_e( 'Start Your Path to', 'ai_prop' ); ?><br>
                        <?php esc_html_e( 'Becoming a Funded', 'ai_prop' ); ?><br>
                        <?php esc_html_e( 'Trader', 'ai_prop' ); ?>
                    </h2>
                </div>
            </div>

            <div class="w-full md:w-2/3 flex flex-col items-center justify-between space-y-10">
                <div
                    class="plan-item h-fit w-full flex flex-col items-center justify-center space-y-5 bg-ai-blue-2 shadow-[inset_0_-8px_30px_0_rgba(92,219,149,0.15)] rounded-lg p-3 md:p-6">
                    <h4 class="text-xl font-manrope text-white/80">
                        <?php esc_html_e( 'Select a Challenge', 'ai_prop' ); ?>
                    </h4>
                    <div x-data="{ selected: 'phase-2' }" class="w-full flex items-center justify-between space-x-5">
                        <!-- Phase 1 -->
                        <div :class="selected === 'phase-1' ? 'bg-ai-green/10 border-white/10 border' : 'bg-transparent border-white/10 border'"
                            class="cursor-pointer flex items-center justify-start py-3 px-3 md:px-6 flex-1 flex-shrink-0 basis-0 rounded-xl shadow-sm hover:shadow-ai-green transition-all duration-200"
                            @click="selected = 'phase-1'" id="phase-1-btn">

                            <!-- Dynamic Glow Dot -->
                            <div class="h-full flex items-center justify-center mr-6">
                                <div class="relative w-fit h-fit">
                                    <!-- Glow background -->
                                    <div
                                        :class="selected === 'phase-1' ? 'absolute inset-0 w-6 h-6 rounded-full bg-ai-green blur-xl opacity-70' : 'absolute inset-0 w-6 h-6 rounded-full bg-white/50 blur-xl opacity-70'">
                                    </div>

                                    <!-- Solid dot -->
                                    <div
                                        :class="selected === 'phase-1' ? 'relative w-3 h-3 rounded-full bg-ai-green shadow-md border border-ai-green' : 'relative w-3 h-3 rounded-full bg-white/50 shadow-md border border-white/50'">
                                    </div>

                                    <!-- Tiny horizontal line with fade effect -->
                                    <div
                                        :class="selected === 'phase-1' ? 'absolute left-full top-1/2 -translate-y-1/2 w-4 h-0.5 bg-gradient-to-r from-ai-green to-transparent' : 'absolute left-full top-1/2 -translate-y-1/2 w-4 h-0.5 bg-gradient-to-r from-white/50 to-transparent'">
                                    </div>

                                </div>
                            </div>

                            <h6 class="text-base whitespace-nowrap">
                                <?php esc_html_e( '1 - Phase', 'ai_prop' ); ?>
                            </h6>
                        </div>

                        <!-- Phase 2 -->
                        <div :class="selected === 'phase-2' ? 'bg-ai-green/10 border-white/10 border' : 'bg-transparent border-white/10 border'"
                            class="cursor-pointer flex items-center justify-start py-3 px-3 md:px-6 flex-1 flex-shrink-0 basis-0 rounded-xl shadow-sm hover:shadow-ai-green transition-all duration-200"
                            @click="selected = 'phase-2'" id="phase-2-btn">

                            <!-- Dynamic Glow Dot -->
                            <div class="h-full flex items-center justify-center mr-6">
                                <div class="relative w-fit h-fit">
                                    <!-- Glow background -->
                                    <div
                                        :class="selected === 'phase-2' ? 'absolute inset-0 w-6 h-6 rounded-full bg-ai-green blur-xl opacity-70' : 'absolute inset-0 w-6 h-6 rounded-full bg-white/50 blur-xl opacity-70'">
                                    </div>

                                    <!-- Solid dot -->
                                    <div
                                        :class="selected === 'phase-2' ? 'relative w-3 h-3 rounded-full bg-ai-green shadow-md border border-ai-green' : 'relative w-3 h-3 rounded-full bg-white/50 shadow-md border border-white/50'">
                                    </div>

                                    <!-- Tiny horizontal line with fade effect -->
                                    <div
                                        :class="selected === 'phase-2' ? 'absolute left-full top-1/2 -translate-y-1/2 w-4 h-0.5 bg-gradient-to-r from-ai-green to-transparent' : 'absolute left-full top-1/2 -translate-y-1/2 w-4 h-0.5 bg-gradient-to-r from-white/50 to-transparent'">
                                    </div>

                                </div>
                            </div>

                            <h6 class="text-base whitespace-nowrap">
                                <?php esc_html_e( '2 - Phase', 'ai_prop' ); ?>
                            </h6>
                        </div>
                    </div>

                    <h4 class="text-xl font-manrope text-white/80">
                        <?php esc_html_e( 'Select Account Size', 'ai_prop' ); ?>
                    </h4>

                    <div x-data="{ selected: 100000, options: [10000, 25000, 50000, 100000, 200000, 500000] }"
                        class="w-full">
                        <div class="relative flex items-center justify-between">
                            <!-- Horizontal line behind dots -->
                            <div class="absolute left-0 right-0 top-8 h-0.5 bg-white/5 z-10"></div>

                            <template x-for="(option, index) in options" :key="option">
                                <div :id="'btn-' + option" class="flex flex-col items-center cursor-pointer group"
                                    @click="selected = option; handleAmountClick(option)"
                                    @keydown.enter="selected = option; handleAmountClick(option)"
                                    @keydown.space="selected = option; handleAmountClick(option)" role="button"
                                    tabindex="0" aria-pressed="false" :aria-pressed="selected === option">
                                    <div class="text-sm font-medium transition-all duration-200"
                                        :class="{'text-ai-green text-lg font-semibold': selected === option, 'text-white/50 group-hover:text-white/80': selected !== option }">
                                        <span x-text="'$' + (option / 1000) + 'K'"></span>
                                    </div>
                                    <div class="w-3 h-3 rounded-full mt-2 transition-all duration-300 relative"
                                        :class="selected === option ? 'bg-ai-green shadow-md shadow-ai-green/40' : 'bg-white/50 group-hover:bg-white/70'">
                                        <!-- Optional pulse animation for selected state -->
                                        <template x-if="selected === option">
                                            <span
                                                class="absolute inset-0 rounded-full bg-ai-green/30 animate-ping"></span>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div
                    class="plan-item relative h-fit w-full flex flex-col items-center justify-center space-y-5 bg-ai-blue-2 shadow-[inset_0_-8px_30px_0_rgba(92,219,149,0.15)] rounded-lg overflow-hidden">
                    <!-- Challenge Section -->
                    <div class="flex items-center justify-center h-fit p-3 md:p-6 w-fit md:w-full z-20">
                        <table id="challenge-table" class="table-auto border-collapse overflow-hidden w-fit md:w-full">
                            <thead class="text-right">
                                <tr class="text-left text-sm font-semibold border-b border-white/10">
                                    <th class="px-2 md:px-4 py-2 bg-transparent"></th>
                                    <th class="px-2 md:px-4 py-2">
                                        <h5
                                            class="text-center font-geist text-base font-medium leading-[14px] bg-gradient-to-b from-white to-[#999] bg-clip-text text-transparent whitespace-nowrap">
                                            <?php esc_html_e( 'Phase 1', 'ai_prop' ); ?>
                                        </h5>
                                    </th>
                                    <th class="px-2 md:px-4 py-2" id="phase2-header">
                                        <h5
                                            class="text-center font-geist text-base font-medium leading-[14px] bg-gradient-to-b from-white to-[#999] bg-clip-text text-transparent whitespace-nowrap">
                                            <?php esc_html_e( 'Phase 2', 'ai_prop' ); ?>
                                        </h5>
                                    </th>
                                    <th class="px-2 md:px-4 py-2">
                                        <h5
                                            class="text-center font-geist text-base font-medium leading-[14px] bg-gradient-to-b from-white to-[#999] bg-clip-text text-transparent whitespace-nowrap">
                                            <?php esc_html_e( 'Funded', 'ai_prop' ); ?>
                                        </h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="challenge-body">
                                <!-- Content will be populated dynamically -->
                            </tbody>
                        </table>
                    </div>
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full z-10">
                        <img class="object-contain"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/challenge.png" alt="challenge">
                    </div>
                </div>
                <div
                    class="plan-item h-fit w-full flex flex-col items-center justify-center space-y-5 bg-ai-blue-2 shadow-[inset_0_-8px_30px_0_rgba(92,219,149,0.15)] rounded-lg p-3 md:p-6">
                    <!-- Payment Section -->
                    <div class="w-full flex flex-col items-center justify-center space-y-5">
                        <div class="flex items-end justify-start w-full space-x-3">
                            <h3 id="priceAmt" class="text-4xl font-semibold">
                                <?php esc_html_e( '$109.00', 'ai_prop' ); ?>
                            </h3>
                            <p class="text-lg text-white/50 whitespace-nowrap" id="accountSizeText">
                                <?php esc_html_e( 'for $100K Account', 'ai_prop' ); ?>
                            </p>
                        </div>
                        <div class="w-full">
                            <a id="priceBtn"
                                href="https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=24"
                                class="w-full flex justify-center items-center gap-2 p-[12px_20px] rounded-lg border border-ai-gray bg-gradient-to-r from-ai-green from-[-27.66%] to-ai-blue-4 to-[170.07%] hover:drop-shadow-ai-green cursor-pointer">
                                <?php esc_html_e( 'Buy Challenge', 'ai_prop' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section
            class="w-full mx-auto max-w-7xl my-20 md:my-40 flex flex-col space-y-5 align-center justify-center p-4 bg-ai-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <!-- top -->
            <div class="h-full flex flex-col space-y-4 items-center justify-center w-full">
                <img class="h-full object-contain"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-2.png" alt="top">
                <h5 class="text-start text-ai-green text-sm md:text-base mb-10">
                    <?php esc_html_e( 'FEATURES', 'ai_prop' ); ?>
                </h5>
                <h2 class="text-3xl font-bold leading-tight md:text-4xl font-manrope">
                    <?php esc_html_e( 'We have the answers', 'ai_prop' ); ?>
                </h2>
            </div>
            <!-- Body -->
            <div class="w-full flex flex-col items-center justify-between space-y-6">
                <div class="custom-section-1 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 lg:mt-10 w-full max-w-5xl">
                    <!-- 1 -->
                    <div
                        class="feature-left relative flex flex-col justify-between h-100 rounded-xl space-y-4 bg-ai-blue border border-ai-blue-2 overflow-hidden">
                        <!-- Top Image -->
                        <div class="absolute top-3 left-3 z-20">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capital.png" alt="capital"
                                class="">
                        </div>
                        <!-- Body Image -->
                        <div class="w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/body-feature.png"
                                alt="feature" class="object-cover w-full h-auto">
                        </div>
                        <!-- Body -->
                        <div class="flex flex-col justify-end space-y-4 p-3 md:p-6 z-20">
                            <div class="space-y-2 flex justify-center flex-col">
                                <h4 class="text-base font-manrope">
                                    <?php esc_html_e( 'Trade with Firm Capital', 'ai_prop' ); ?>
                                </h4>
                                <p class="text-sm text-white/75">
                                    <?php esc_html_e( 'Access up to $200,000 in funded accounts — grow your trading potential without risking your own money.', 'ai_prop' ); ?>
                                </p>
                            </div>
                        </div>
                        <!-- Bottom Image -->
                        <div class="absolute bottom-0 w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-feature.png"
                                alt="bottom-feature" class="w-full h-auto object-cover">
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="grid grid-rows-2 gap-6">
                        <!-- 2 -->
                        <div
                            class="feature-middle-top relative flex justify-center h-45 rounded-xl bg-ai-blue border border-ai-blue-2 overflow-hidden">
                            <!-- Top Image -->
                            <div class="absolute top-0 w-full z-10">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-3.png" alt="top"
                                    class="object-cover w-full h-auto">
                            </div>
                            <!-- Body -->
                            <div class="space-y-2 flex justify-end flex-col z-20 p-3 md:p-6">
                                <h4 class="text-base font-manrope">
                                    <?php esc_html_e( 'Blockchain-Backed Payouts', 'ai_prop' ); ?>
                                </h4>
                            </div>
                            <!-- Bottom Image -->
                            <div class="absolute bottom-0 w-full z-10">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-feature.png"
                                    alt="bottom-feature" class="w-full h-auto object-cover">
                            </div>
                        </div>
                        <!-- 3 -->
                        <div
                            class="feature-middle-bottom relative flex justify-center h-45 rounded-xl bg-ai-blue border border-ai-blue-2 overflow-hidden">
                            <!-- Top Image -->
                            <div class="absolute top-0 w-full z-10">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-4.png" alt="top"
                                    class="object-cover w-full h-auto">
                            </div>
                            <!-- Body -->
                            <div class="space-y-2 flex justify-end flex-col z-20 p-3 md:p-6">
                                <h4 class="text-base font-manrope">
                                    <?php esc_html_e( 'Best Trading Conditions', 'ai_prop' ); ?>
                                </h4>
                            </div>
                            <!-- Bottom Image -->
                            <div class="absolute bottom-0 w-full z-10">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-feature.png"
                                    alt="bottom-feature" class="w-full h-auto object-cover">
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div
                        class="feature-right relative flex flex-col justify-between h-100 rounded-xl space-y-4 bg-ai-blue border border-ai-blue-2 overflow-hidden">
                        <!-- Top Image -->
                        <div class="absolute top-3 left-3 z-20">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/radio.png" alt="radio"
                                class="">
                        </div>
                        <!-- Body Image -->
                        <div class="w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/body-feature.png"
                                alt="feature" class="object-cover w-full h-auto">
                        </div>
                        <!-- Body -->
                        <div class="flex flex-col justify-end space-y-4 p-3 md:p-6 z-20">
                            <div class="space-y-2 flex justify-center flex-col">
                                <h4 class="text-base font-manrope">
                                    <?php esc_html_e( 'Trade Your Way', 'ai_prop' ); ?>
                                </h4>
                                <p class="text-sm text-white/75">
                                    <?php esc_html_e( 'Scalping, swing, EAs — no restrictions. Your strategy, your edge.', 'ai_prop' ); ?>
                                </p>
                            </div>
                        </div>
                        <!-- Bottom Image -->
                        <div class="absolute bottom-0 w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-feature.png"
                                alt="bottom-feature" class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
                <div class="custom-section-2 grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl">
                    <!-- 1 -->
                    <div
                        class="feature-left relative flex flex-col justify-between h-100 rounded-xl space-y-4 bg-ai-blue border border-ai-blue-2 overflow-hidden">
                        <!-- Top Image -->
                        <div class="absolute top-3 left-3 z-20">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/zap.png" alt="zap"
                                class="">
                        </div>
                        <!-- Body Image -->
                        <div class="w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/body-feature.png"
                                alt="feature" class="object-cover w-full h-auto">
                        </div>
                        <!-- Body -->
                        <div class="flex flex-col justify-end space-y-4 p-3 md:p-6 z-20">
                            <div class="space-y-2 flex justify-center flex-col">
                                <h4 class="text-base font-manrope">
                                    <?php esc_html_e( 'Fast Payouts, Fast Scaling', 'ai_prop' ); ?>
                                </h4>
                                <p class="text-sm text-white/75">
                                    <?php esc_html_e( 'Get paid within days and scale your account quickly as you pass each phase', 'ai_prop' ); ?>
                                </p>
                            </div>
                        </div>
                        <!-- Bottom Image -->
                        <div class="absolute bottom-0 w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-feature.png"
                                alt="bottom-feature" class="w-full h-auto object-cover">
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="grid grid-rows-2 gap-6">
                        <!-- 2 -->
                        <div
                            class="feature-middle-top relative flex justify-center h-45 rounded-xl bg-ai-blue border border-ai-blue-2 overflow-hidden">
                            <!-- Top Image -->
                            <div class="absolute top-0 w-full z-10">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-5.png" alt="top"
                                    class="object-cover w-full h-auto">
                            </div>
                            <!-- Body -->
                            <div class="space-y-2 flex justify-end flex-col z-20 p-3 md:p-6">
                                <h4 class="text-base font-manrope">
                                    <?php esc_html_e( 'Coinstrat Pro Backed Broker', 'ai_prop' ); ?>
                                </h4>
                            </div>
                            <!-- Bottom Image -->
                            <div class="absolute bottom-0 w-full z-10">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-feature.png"
                                    alt="bottom-feature" class="w-full h-auto object-cover">
                            </div>
                        </div>
                        <!-- 3 -->
                        <div
                            class="feature-middle-bottom relative flex justify-center h-45 rounded-xl bg-ai-blue border border-ai-blue-2 overflow-hidden">
                            <!-- Top Image -->
                            <div class="absolute top-0 w-full z-10">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-6.png" alt="top"
                                    class="object-cover w-full h-auto">
                            </div>
                            <!-- Body -->
                            <div class="space-y-2 flex justify-end flex-col z-20 p-3 md:p-6">
                                <h4 class="text-base font-manrope">
                                    <?php esc_html_e( 'Profit Sharing', 'ai_prop' ); ?>
                                </h4>
                            </div>
                            <!-- Bottom Image -->
                            <div class="absolute bottom-0 w-full z-10">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-feature.png"
                                    alt="bottom-feature" class="w-full h-auto object-cover">
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div
                        class="feature-right relative flex flex-col justify-between h-100 rounded-xl space-y-4 bg-ai-blue border border-ai-blue-2 overflow-hidden">
                        <!-- Top Image -->
                        <div class="absolute top-3 left-3 z-20">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/database.png"
                                alt="database" class="">
                        </div>
                        <!-- Body Image -->
                        <div class="w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/body-feature.png"
                                alt="feature" class="object-cover w-full h-auto">
                        </div>
                        <!-- Body -->
                        <div class="flex flex-col justify-end space-y-4 p-3 md:p-6 z-20">
                            <div class="space-y-2 flex justify-center flex-col">
                                <h4 class="text-base font-manrope">
                                    <?php esc_html_e( 'No Monthly Fees', 'ai_prop' ); ?>
                                </h4>
                                <p class="text-sm text-white/75">
                                    <?php esc_html_e( 'Every payout is fast, secure, and fully transparent—trackable on the blockchain for proof you can trust.', 'ai_prop' ); ?>
                                </p>
                            </div>
                        </div>
                        <!-- Bottom Image -->
                        <div class="absolute bottom-0 w-full z-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-feature.png"
                                alt="bottom-feature" class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News section -->
        <section class="w-full p-4 bg-ai-bg bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div
                class="w-full mx-auto max-w-6xl flex flex-col md:flex-row space-y-5 md:space-y-0 align-center justify-center">

                <div
                    class="relative flex flex-col items-center justify-center h-100 md:h-140 overflow-hidden w-full md:w-1/2">
                    <!-- Top Image -->
                    <div class="absolute top-0 w-full z-10">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stars.png" alt="stars"
                            class="object-cover w-full h-auto">
                    </div>
                    <!-- Body -->
                    <div class="w-full mt-20 space-y-2 flex justify-end flex-col z-20 p-3 md:p-6">
                        <h4 class="text-lg font-bold font-manrope text-center">
                            <?php esc_html_e( 'Stay Updated with our latest news', 'ai_prop' ); ?>
                        </h4>
                        <div class="bg-[#062c3e] p-1.5 rounded-md flex items-center w-full">
                            <input type="email" placeholder="Enter your email"
                                class="w-3/5 md:w-full bg-transparent text-white placeholder-white/75 px-x md:px-4 py-2 outline-none flex-1" />
                            <button
                                class="w-2/5 md:w-full cursor-pointer whitespace-nowrap bg-gradient-to-r from-ai-green to-blue-900 text-white font-medium px-3 md:px-6 py-2 rounded-md hover:drop-shadow-ai-green transition">
                                <?php esc_html_e( 'Join Now', 'ai_prop' ); ?>
                            </button>
                        </div>
                    </div>


                </div>

                <!-- Horizontal Divider -->
                <div
                    class="hidden my-4 w-px h-100 mx-auto md:flex self-center bg-gradient-to-b from-transparent via-ai-green to-transparent">
                </div>
                <!-- Horizontal Divider -->
                <div
                    class="my-4 w-11/12 mx-auto flex md:hidden h-px self-center bg-gradient-to-r from-transparent via-ai-green to-transparent">
                </div>

                <div
                    class="relative flex items-center justify-center overflow-hidden flex-col h-100 md:h-140 w-full md:w-1/2">
                    <!-- Top Image -->
                    <div class="absolute top-10 w-9/10 z-10">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/community.png" alt="community"
                            class="object-cover w-full h-auto">
                        <!-- Bottom inner shadow -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-5 bg-[linear-gradient(to_top,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
                        </div>
                        <!-- Top inner shadow -->
                        <div
                            class="absolute inset-x-0 top-0 h-10 bg-[linear-gradient(to_bottom,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
                        </div>
                        <!-- Left inner shadow -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-10 bg-[linear-gradient(to_right,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
                        </div>
                        <!-- Right inner shadow -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-5 bg-[linear-gradient(to_left,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
                        </div>
                    </div>
                    <!-- Body -->
                    <div class="mt-20 space-y-2 flex justify-end flex-col z-20 p-3 md:p-6">
                        <h4 class="text-lg font-bold font-manrope">
                            <?php esc_html_e( 'Be part of the Community', 'ai_prop' ); ?>
                        </h4>
                        <a href="<?php echo is_front_page() ? '#' : esc_url( site_url( '/' ) ) . '#'; ?>"
                            class="text-center whitespace-nowrap text-lg rounded-lg bg-blue-900 px-4 py-2 hover:drop-shadow-ai-blue transition duration-300 ease-in-out">
                            <?php esc_html_e( 'Join Discord', 'ai_prop' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq"
            class="faq relative flex align-center justify-center min-h-fit bg-ai-faq bg-cover bg-center bg-no-repeat overflow-hidden will-change-auto">
            <div class="p-3 md:p-10 w-full md:w-5/6 flex flex-col space-y-8 md:space-y-0 md:flex-row">
                <div class="flex flex-col space-y-10 items-center md:items-start justify-start w-full md:w-2/5">
                    <!-- Heading Content -->
                    <div class="w-fit">
                        <h5 class="text-center md:text-start text-ai-green text-sm md:text-base mb-5">
                            <?php esc_html_e( 'FREQUENTLY ASKED QUESTIONS', 'ai_prop' ); ?>
                        </h5>
                        <h2 class="text-center md:text-start text-2xl font-bold leading-tight md:text-4xl font-manrope">
                            <?php esc_html_e( 'We have the answers', 'ai_prop' ); ?>
                        </h2>
                    </div>
                    <div class="w-fit flex flex-col items-center md:items-start space-y-4">
                        <p class="text-center md:text-start text-base w-full">
                            <?php esc_html_e( "Got More Questions?", 'ai_prop' ); ?>
                        </p>
                        <div class="flex items-center space-x-4">
                            <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                                class="flex items-center justify-between whitespace-nowrap text-lg rounded-lg bg-gradient-to-r from-green-400 -from-28% to-blue-900 to-127% px-4 py-2 hover:drop-shadow-ai-green transition duration-300 ease-in-out">
                                <?php esc_html_e( 'Get Funded Now', 'ai_prop' ); ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"
                                    alt="arrow-right" class="h-7">
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="flex flex-col items-start space-y-4 w-full md:w-3/5 bg-ai-blue p-2 rounded-lg border border-ai-blue/10 overflow-hidden">
                    <!-- FAQ 1 -->
                    <div x-data="{ open: false }"
                        class="card w-full rounded-lg hover:shadow-lg bg-ai-blue-2 shadow-[#051924] border border-ai-blue-2/20 overflow-hidden">
                        <div @click="open = !open"
                            class="flex justify-between items-center w-full cursor-pointer px-4 py-3 rounded-md">
                            <h3 class="text-lg font-medium font-creato-display">
                                <?php esc_html_e( 'What is AI prop works?', 'ai_prop' ); ?>
                            </h3>
                            <span x-text="open ? '-' : '+'"></span>
                        </div>
                        <div x-show="open" x-transition class="p-4 rounded-md text-white/50">
                            <p>
                                <?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Phasellus pulvinar ornare scelerisque ultricies facilisi feugiat ullamcorper sagittis pulvinar.', 'ai_prop' ); ?>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div x-data="{ open: false }"
                        class="w-full rounded-lg hover:shadow-lg bg-ai-blue-2 shadow-[#051924] border border-ai-blue-2/20 overflow-hidden">
                        <div @click="open = !open"
                            class="flex justify-between items-center w-full cursor-pointer px-4 py-3 rounded-md">
                            <h3 class="text-lg font-medium font-creato-display">
                                <?php esc_html_e( 'What accounts do we offer?', 'ai_prop' ); ?>
                            </h3>
                            <span x-text="open ? '-' : '+'"></span>
                        </div>
                        <div x-show="open" x-transition class="p-4 rounded-md text-white/50">
                            <p>
                                <?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Phasellus pulvinar ornare scelerisque ultricies facilisi feugiat ullamcorper sagittis pulvinar.', 'ai_prop' ); ?>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div x-data="{ open: false }"
                        class="w-full rounded-lg hover:shadow-lg bg-ai-blue-2 shadow-[#051924] border border-ai-blue-2/20 overflow-hidden">
                        <div @click="open = !open"
                            class="flex justify-between items-center w-full cursor-pointer px-4 py-3 rounded-md">
                            <h3 class="text-lg font-medium font-creato-display">
                                <?php esc_html_e( 'How does the DLL work?', 'ai_prop' ); ?>
                            </h3>
                            <span x-text="open ? '-' : '+'"></span>
                        </div>
                        <div x-show="open" x-transition class="p-4 rounded-md text-white/50">
                            <p>
                                <?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Phasellus pulvinar ornare scelerisque ultricies facilisi feugiat ullamcorper sagittis pulvinar.', 'ai_prop' ); ?>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div x-data="{ open: false }"
                        class="w-full rounded-lg hover:shadow-lg bg-ai-blue-2 shadow-[#051924] border border-ai-blue-2/20 overflow-hidden">
                        <div @click="open = !open"
                            class="flex justify-between items-center w-full cursor-pointer px-4 py-3 rounded-md">
                            <h3 class="text-lg font-medium font-creato-display">
                                <?php esc_html_e( 'What are the criteria to be eligible for a payout?', 'ai_prop' ); ?>
                            </h3>
                            <span x-text="open ? '-' : '+'"></span>
                        </div>
                        <div x-show="open" x-transition class="p-4 rounded-md text-white/50">
                            <p>
                                <?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Phasellus pulvinar ornare scelerisque ultricies facilisi feugiat ullamcorper sagittis pulvinar.', 'ai_prop' ); ?>
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div x-data="{ open: false }"
                        class="w-full rounded-lg hover:shadow-lg bg-ai-blue-2 shadow-[#051924] border border-ai-blue-2/20 overflow-hidden">
                        <div @click="open = !open"
                            class="flex justify-between items-center w-full cursor-pointer px-4 py-3 rounded-md">
                            <h3 class="text-lg font-medium font-creato-display">
                                <?php esc_html_e( 'What is the process for submitting a claim?', 'ai_prop' ); ?>
                            </h3>
                            <span x-text="open ? '-' : '+'"></span>
                        </div>
                        <div x-show="open" x-transition class="p-4 rounded-md text-white/50">
                            <p>
                                <?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Phasellus pulvinar ornare scelerisque ultricies facilisi feugiat ullamcorper sagittis pulvinar.', 'ai_prop' ); ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Bottom inner shadow -->
            <div
                class="absolute inset-x-0 bottom-0 h-10 bg-[linear-gradient(to_top,rgba(0,0,0,10)_10%,transparent_100%)]">
            </div>
        </section>

        <!-- Users Section -->
        <section
            class="relative flex flex-col space-y-10 align-center justify-center mt-20 md:mt-40 p-4 min-h-fit bg-ai-bg bg-cover bg-center bg-no-repeat will-change-auto">
            <!-- Horizontal Divider -->
            <div
                class="my-4 w-11/12 mx-auto flex h-px self-center bg-gradient-to-r from-transparent via-ai-green to-transparent">
            </div>
            <div
                class="max-w-sm md:max-w-3xl lg:max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-6 lg:mt-10 w-full">
                <!-- Card 1 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="image">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 10 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 11 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
                <!-- Card 12 -->
                <div class="user-item w-full flex bg-ai-dark-green h-fit rounded-lg p-2 justify-between space-x-3">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex px-2 py-1 space-x-2 justify-between bg-ai-blue-3 rounded-sm">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/us.png" alt="us"
                                    class="">
                            </div>
                            <h6>
                                <?php esc_html_e( 'John', 'ai_prop' ); ?>
                            </h6>
                        </div>
                        <h5 class="font-manrope text-2xl font-bold">
                            <?php esc_html_e( '$1,500.57', 'ai_prop' ); ?>
                        </h5>
                    </div>
                    <div class="relative w-full p-1 rounded-md flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="user"
                            class="">
                        <!-- Gradient border (top only) -->
                        <div
                            class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (bottom only) -->
                        <div
                            class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (left only) -->
                        <div
                            class="absolute inset-y-0 left-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                        <!-- Gradient border (right only) -->
                        <div
                            class="absolute inset-y-0 right-0 h-full w-px bg-gradient-to-b from-ai-green via-transparent to-ai-green">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center self-center space-x-4">
                <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                    class="flex items-center justify-between whitespace-nowrap text-lg rounded-lg bg-gradient-to-r from-green-400 -from-28% to-blue-900 to-127% px-4 py-2 hover:drop-shadow-ai-green transition duration-300 ease-in-out">
                    <?php esc_html_e( 'Get Funded Now', 'ai_prop' ); ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png" alt="arrow-right"
                        class="h-7">
                </a>
            </div>

        </section>

        <!-- Master Section -->
        <section
            class="relative flex align-center justify-center p-4 min-h-200 bg-ai-bg bg-cover bg-center bg-no-repeat will-change-auto">
            <div class="w-fit flex flex-col space-y-4 items-center justify-center z-20">
                <h2
                    class="text-center text-4xl font-bold leading-tight md:text-6xl  font-manrope bg-gradient-to-b from-white to-[#999] bg-clip-text text-transparent">
                    <?php esc_html_e( 'We help you Master the', 'ai_prop' ); ?><br>
                    <?php esc_html_e( 'Trade Markets', 'ai_prop' ); ?>
                </h2>
                <p class="text-base w-full text-center">
                    <?php esc_html_e( "Pass our challenge, get funded, and trade with real capital. ", 'ai_prop' ); ?>
                </p>
                <div class="flex items-center space-x-4">
                    <a href="<?php echo is_front_page() ? '#pricing' : esc_url( site_url( '/' ) ) . '#pricing'; ?>"
                        class="flex items-center justify-between whitespace-nowrap text-lg rounded-lg bg-gradient-to-r from-green-400 -from-28% to-blue-900 to-127% px-4 py-2 hover:drop-shadow-ai-green transition duration-300 ease-in-out">
                        <?php esc_html_e( 'Get Funded Now', 'ai_prop' ); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"
                            alt="arrow-right" class="h-7">
                    </a>
                </div>
            </div>
            <div class="absolute bottom-0 md:-bottom-50 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom-circle.png" alt=""
                    class="w-full h-full object-contain">
                <!-- Bottom inner shadow -->
                <div
                    class="absolute inset-x-0 bottom-0 h-5 bg-[linear-gradient(to_top,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
                </div>
                <!-- Top inner shadow -->
                <div
                    class="absolute inset-x-0 top-0 h-10 bg-[linear-gradient(to_bottom,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
                </div>
                <!-- Left inner shadow -->
                <div
                    class="absolute inset-y-0 left-0 h-full w-10 bg-[linear-gradient(to_right,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
                </div>
                <!-- Right inner shadow -->
                <div
                    class="absolute inset-y-0 right-0 h-full w-5 bg-[linear-gradient(to_left,rgba(0,0,0,10)_10%,transparent_100%)] z-11">
                </div>
            </div>
        </section>

    </main>

    <?php get_template_part( 'template-parts/content/content', 'footer' ); ?>

</div>

<?php
get_footer();
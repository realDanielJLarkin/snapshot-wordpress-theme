<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;700&display=swap" rel="stylesheet">
    <?php 
        wp_head()
    ?> 
</head>
<body class="h-full">
<div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    
    <div class="hidden lg:flex lg:flex-1 justify-center">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-32 w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
        </a>
      </div>

    
    <nav class="mx-auto flex max-w-7xl items-center p-2 lg:px-8 justify-center " aria-label="Global">
      <div class="flex lg:hidden">
        <button id="hamburger-button" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="/rentals" class="text-sm uppercase leading-6 text-gray-900">Retnals</a>
        <a href="/pre-owned-inventory" class="text-sm uppercase leading-6 text-gray-900">Pre-Owned</a>
        <a href="/passport" class="text-sm uppercase leading-6 text-gray-900">Passport</a>
        <a href="/prints" class="text-sm uppercase leading-6 text-gray-900">Prints</a>
        <a href="/contact" class="text-sm uppercase leading-6 text-gray-900">Contact</a>
      </div>
    </nav>


    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="menu-dialog" class="hidden lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-12 w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
          </a>
          <button id="close-button" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="/rentals" class="-mx-3 block rounded-lg px-3 py-2 text-base uppercase leading-7 text-gray-900 hover:bg-gray-50">Product</a>
              <a href="/pre-owned-inventory" class="-mx-3 block rounded-lg px-3 py-2 text-base uppercase leading-7 text-gray-900 hover:bg-gray-50">Features</a>
              <a href="/pasport" class="-mx-3 block rounded-lg px-3 py-2 text-base uppercase leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
              <a href="/contact" class="-mx-3 block rounded-lg px-3 py-2 text-base uppercase leading-7 text-gray-900 hover:bg-gray-50">Company</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed:400,
    spaceBetween: 7, 
   
   
  autoplay:true,

   spaceBetween:8,
   slidesPerView:1,
   spaceBetween: 8 ,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  
  const swiper_grid = new Swiper('.grid-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

   
    autoplay:true,
    spaceBetween:8,
   slidesPerView:3,
  



    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
      
  });
  

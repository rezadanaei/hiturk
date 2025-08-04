<style>

/* Block: Category Dropdown */
.category-dropdown {
    padding-bottom: 15px;
    display: flex;
    justify-content: space-between;
    max-height: 400px;
    overflow: hidden; 
    position: relative;
    z-index: 1000;
}

/* Element: Header */
.category-dropdown__header {
    display: inline-block;
    position: relative;
    direction: ltr;
    
}
.category-dropdown__header::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 3px;
    height: 100%;
    background-color: #E3B000;
    border-radius: 1.5px;
}

.category-dropdown__header-scrollbar{
    height: 100%;
    width: 100%;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #999 #f1f1f1;


}
/* Chrome, Edge, Safari */
.category-dropdown__header-scrollbar::-webkit-scrollbar {
  width: 8px;
}

/* track: پس‌زمینه اسکرول‌باکس */
.category-dropdown__header-scrollbar::-webkit-scrollbar-track {
  background: #f1f1f1;
  margin-top: 5px;  /* فاصله از بالا */
  margin-bottom: 5px; /* فاصله از پایین */
  border-radius: 4px;
}

/* thumb: نوار قابل حرکت */
.category-dropdown__header-scrollbar::-webkit-scrollbar-thumb {
  background-color: #999;
  border-radius: 4px;
  border: 2px solid #f1f1f1;
}

.category-dropdown__header-scrollbar::-webkit-scrollbar-thumb:hover {
  background: #666;
}
.category-dropdown__panel-scrollbar {
    direction: rtl;
    column-width: 180px;
    column-gap: 15px;
    gap: 10px;
    padding-top: 25px;
    position: relative;
}
/* Element: Content */
.category-dropdown__content {
    width: 100%;
}

/* Element: Header List */
.category-dropdown__header-list {
    list-style: none;
    padding: 0;
    margin: 0;
    direction: rtl;
}



/* Element: Header Item */
.category-dropdown__header-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding: 15px 30px;
    box-sizing: border-box;
    white-space: nowrap;
    cursor: pointer;
    color: #606060;
    transition: color 0.3s ease, background-color 0.3s ease;
}

.category-dropdown__header-item:hover {
    color: #E3B000;
    background-color: rgba(96, 96, 96, 0.07);
}

.category-dropdown__header-item span {
    font-family: 'VazirLightFD', sans-serif;
    font-size: 14px;
    line-height: 26px;
}
.category-dropdown__header-item svg {
    min-width: 22px !important;
}

/* Element: Desktop View */
.category-dropdown__desktop {
    display: block;
    width: 100%;
    padding: 0 10px;
    box-sizing: border-box;
}

/* Element: Panel */
.category-dropdown__panel {
    display: none;
    box-sizing: border-box;
}

.category-dropdown__panel--active {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.category-dropdown__panel-title {
    font-family: 'VazirMediumFD', sans-serif;
    font-size: 1rem;
    line-height: 18px;
    text-align: right;
    color: #000000;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    text-decoration: none;
}
.category-dropdown .scrollbar-title{
    display: flex;
    margin-bottom: 10px; 
    top:0px;
    right: 0;
    position: absolute;
}

.category-dropdown__panel-title:hover {
    color: #E3B000;
}

/* Element: Panel Flex Container */
.category-dropdown__panel-flex {
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;

    width: 100%;
    
}

/* Element: Panel Items */
.category-dropdown__panel-items {
  width: 100%;
  /* max-width: 1000px; */
  height: 385px;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 10px 0;
  padding-right: 10px;
  scrollbar-width: thin;
  scrollbar-color: #999 #f1f1f1;
  direction: ltr;
  text-align: right;
  position: relative;
}

/* Chrome, Edge, Safari */
.category-dropdown__panel-items::-webkit-scrollbar {
  width: 8px;
}

/* track: پس‌زمینه اسکرول‌باکس */
.category-dropdown__panel-items::-webkit-scrollbar-track {
  background: #f1f1f1;
  margin-top: 5px;  /* فاصله از بالا */
  margin-bottom: 5px; /* فاصله از پایین */
  border-radius: 4px;
}

/* thumb: نوار قابل حرکت */
.category-dropdown__panel-items::-webkit-scrollbar-thumb {
  background-color: #999;
  border-radius: 4px;
  border: 2px solid #f1f1f1;
}

.category-dropdown__panel-items::-webkit-scrollbar-thumb:hover {
  background: #666;
}
.category-dropdown__panel-scrollbar {
    direction: rtl;
    column-width: 170px;
    column-gap: 15px;
    gap: 10px;
    padding-top: 25px;
    position: relative;
}

.category-dropdown__panel-item{
    display: flex;
    flex-direction: column;
    gap: 5px; 
    box-sizing: border-box;    
    break-inside: avoid;
    margin-bottom: 15px;

    
    
}

.category-dropdown__panel-items a, .category-dropdown__panel-items span{
    min-width: 100px;
}

.category-dropdown__panel-item .category-dropdown__panel-title {
    font-size: 14px;
    text-wrap: nowrap;
    position: relative;
    padding-right: 10px;
}
.category-dropdown__panel-item .category-dropdown__panel-title::after{
    content: '';
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    border: #E3B000 solid 1px;
    border-radius: 1px;
}

.category-dropdown__panel-item-link {
    font-family: 'VazirLightFD', sans-serif;
    font-weight: 100;
    font-size: 12px;
    line-height: 24px;
    text-align: right;
    color: #606060;
    text-decoration: none;
    /* max-width: 50px; */
}

.category-dropdown__panel-item-link:hover {
    color: #E3B000;
}
.category-dropdown__panel-swipers{
    width: 20%;
    min-width: 200px;
    flex: 1;
    padding: 15px;
    /* display: none; */
    
}
.category-dropdown__panel-swipers img{
    width: 100%
}
.category-dropdown__panel__megamenu-brands{
    width: 100%;
    
}
.category-dropdown__panel__megamenu-brands .title,
.category-dropdown__mobile__panel-brands-swiper .title{
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 5px;
    font-family: 'VazirMediumFD';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 23px;
    text-align: right;
    margin: 5px 0 ;
    color: #000000;


 }

/* Element: Mobile View */
.category-dropdown__mobile {
    display: none;
}

/* Responsive: Mobile */
@media (max-width: 1024px) {
    .category-dropdown__desktop {
        display: none;
    }

    .category-dropdown__mobile {
        display: block;
        overflow-y:auto;
        max-height: 100%;
        max-width: calc(100% - 120px);
        box-sizing: border-box;
    }
    .category-dropdown{
        max-height: 100%;
        padding: 0;
        height: 100%;
        
    }
    
    .category-dropdown__header{
        background-color: rgba(96, 96, 96,0.06);
        width: 120px;

    }
    .category-dropdown__header::before{
        display: none;
    }
    .category-dropdown__header-list{
        width: 100%;
    }
    .category-dropdown__header-item{
        flex-direction: column;
        padding: 15px 20px;
        width: 120px;


    }
    .category-dropdown__header-item:hover{
        background-color: white;
    }
    .category-dropdown__header-item span{
        white-space: normal;
        display: block;
        width: 100%;
        text-align: center;
        box-sizing: border-box;
    }
    .category-dropdown__mobile__panel-items {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 equal columns */
        grid-template-rows: repeat(4, auto);   /* 4 rows */
        gap: 8px !important;
        padding: 0 20px;
        box-sizing: border-box;
        width: 100%;
        
    
    }

    .category-dropdown__mobile__panel-item {
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 5px;
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        /* overflow: hidden; ensures no internal overflow */
    }

    .category-dropdown__mobile__panel-item img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        background-color: rgba(0, 0, 0, 0.06); /* light background */
        padding: 8px;
        border-radius: 12px;
        display: block;
        box-sizing: border-box;
    }

    .category-dropdown__mobile__panel-item span {
        font-family: 'VazirMediumFD';
        font-style: normal;
        font-size: 12px;
        line-height: 16px;
        color: #000000;
        text-align: center;
        display: block;
        word-break: break-word;
        box-sizing: border-box;
    }
    .category-dropdown__panel-title {
        
        font-size: 14;
        
        color: #E3B000;
        padding:10px 0 ;
        padding-right: 20px;
        
    }
    .category-dropdown__mobile__panel-categories-swiper{
        width: 100%;
        max-width:  calc(100% - 40px);
        margin: auto ;
        margin-top: 10px;
    
    }
    .category-dropdown__mobile__panel-brands-swiper{
        width: 100%;
        max-width:  calc(100% - 20px);
        margin-right: 20px;
    }
    .category-dropdown__mobile__panel-brands-swiper .title{
        margin-right: 20px;
    }

}
</style>


<div class="category-dropdown">
    <div class="category-dropdown__header">
        <div class="category-dropdown__header-scrollbar">
            <ul class="category-dropdown__header-list">
                <li class="category-dropdown__header-item" data-index="0">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0481 15.228L15.0591 9.348L15.6561 7.109C15.8851 6.075 16.0011 5.017 16.0011 3.964V0.5C16.0011 0.224 15.7771 0 15.5011 0C15.2251 0 15.0011 0.224 15.0011 0.5V3.036C13.1611 3.21 11.6571 4.279 11.0011 4.829C10.3451 4.279 8.84106 3.21 7.00106 3.036V0.5C7.00106 0.224 6.77706 0 6.50106 0C6.22506 0 6.00106 0.224 6.00106 0.5V3.963C6.00106 5.021 6.11706 6.079 6.35106 7.129L6.94306 9.347L0.979058 15.203C-0.102942 16.123 -0.319942 17.697 0.476058 18.864C2.56706 21.936 6.79606 24 11.0001 24C15.2041 24 19.4341 21.937 21.5241 18.864C22.3201 17.697 22.1031 16.123 21.0471 15.227L21.0481 15.228ZM11.0001 6C11.1281 6 11.2561 5.952 11.3541 5.854C11.3711 5.837 12.9751 4.288 14.9961 4.048C14.9901 5.001 14.8861 5.957 14.6841 6.871L14.1161 8.999H7.88506L7.32206 6.891C7.11506 5.96 7.01106 5.004 7.00506 4.047C9.02606 4.286 10.6301 5.836 10.6471 5.853C10.7451 5.95 10.8731 5.999 11.0011 5.999L11.0001 6ZM20.6981 18.302C18.8141 21.069 14.8261 23 11.0001 23C7.17406 23 3.18606 21.068 1.30206 18.302C0.795058 17.558 0.935058 16.554 1.65406 15.941L7.70506 10.001H14.2971L20.3741 15.966C21.0661 16.555 21.2061 17.559 20.6991 18.303L20.6981 18.302Z" fill="currentColor"/>
                    </svg>
                    <span>لباس خیلی سکسی زنانه</span>
                </li>
                <li class="category-dropdown__header-item" data-index="1">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0481 15.228L15.0591 9.348L15.6561 7.109C15.8851 6.075 16.0011 5.017 16.0011 3.964V0.5C16.0011 0.224 15.7771 0 15.5011 0C15.2251 0 15.0011 0.224 15.0011 0.5V3.036C13.1611 3.21 11.6571 4.279 11.0011 4.829C10.3451 4.279 8.84106 3.21 7.00106 3.036V0.5C7.00106 0.224 6.77706 0 6.50106 0C6.22506 0 6.00106 0.224 6.00106 0.5V3.963C6.00106 5.021 6.11706 6.079 6.35106 7.129L6.94306 9.347L0.979058 15.203C-0.102942 16.123 -0.319942 17.697 0.476058 18.864C2.56706 21.936 6.79606 24 11.0001 24C15.2041 24 19.4341 21.937 21.5241 18.864C22.3201 17.697 22.1031 16.123 21.0471 15.227L21.0481 15.228ZM11.0001 6C11.1281 6 11.2561 5.952 11.3541 5.854C11.3711 5.837 12.9751 4.288 14.9961 4.048C14.9901 5.001 14.8861 5.957 14.6841 6.871L14.1161 8.999H7.88506L7.32206 6.891C7.11506 5.96 7.01106 5.004 7.00506 4.047C9.02606 4.286 10.6301 5.836 10.6471 5.853C10.7451 5.95 10.8731 5.999 11.0011 5.999L11.0001 6ZM20.6981 18.302C18.8141 21.069 14.8261 23 11.0001 23C7.17406 23 3.18606 21.068 1.30206 18.302C0.795058 17.558 0.935058 16.554 1.65406 15.941L7.70506 10.001H14.2971L20.3741 15.966C21.0661 16.555 21.2061 17.559 20.6991 18.303L20.6981 18.302Z" fill="currentColor"/>
                    </svg>
                    <span>لباس مردانه</span>
                </li>
                <li class="category-dropdown__header-item" data-index="2">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0481 15.228L15.0591 9.348L15.6561 7.109C15.8851 6.075 16.0011 5.017 16.0011 3.964V0.5C16.0011 0.224 15.7771 0 15.5011 0C15.2251 0 15.0011 0.224 15.0011 0.5V3.036C13.1611 3.21 11.6571 4.279 11.0011 4.829C10.3451 4.279 8.84106 3.21 7.00106 3.036V0.5C7.00106 0.224 6.77706 0 6.50106 0C6.22506 0 6.00106 0.224 6.00106 0.5V3.963C6.00106 5.021 6.11706 6.079 6.35106 7.129L6.94306 9.347L0.979058 15.203C-0.102942 16.123 -0.319942 17.697 0.476058 18.864C2.56706 21.936 6.79606 24 11.0001 24C15.2041 24 19.4341 21.937 21.5241 18.864C22.3201 17.697 22.1031 16.123 21.0471 15.227L21.0481 15.228ZM11.0001 6C11.1281 6 11.2561 5.952 11.3541 5.854C11.3711 5.837 12.9751 4.288 14.9961 4.048C14.9901 5.001 14.8861 5.957 14.6841 6.871L14.1161 8.999H7.88506L7.32206 6.891C7.11506 5.96 7.01106 5.004 7.00506 4.047C9.02606 4.286 10.6301 5.836 10.6471 5.853C10.7451 5.95 10.8731 5.999 11.0011 5.999L11.0001 6ZM20.6981 18.302C18.8141 21.069 14.8261 23 11.0001 23C7.17406 23 3.18606 21.068 1.30206 18.302C0.795058 17.558 0.935058 16.554 1.65406 15.941L7.70506 10.001H14.2971L20.3741 15.966C21.0661 16.555 21.2061 17.559 20.6991 18.303L20.6981 18.302Z" fill="currentColor"/>
                    </svg>
                    <span>لباس بچگانه</span>
                </li>
                <li class="category-dropdown__header-item" data-index="2">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0481 15.228L15.0591 9.348L15.6561 7.109C15.8851 6.075 16.0011 5.017 16.0011 3.964V0.5C16.0011 0.224 15.7771 0 15.5011 0C15.2251 0 15.0011 0.224 15.0011 0.5V3.036C13.1611 3.21 11.6571 4.279 11.0011 4.829C10.3451 4.279 8.84106 3.21 7.00106 3.036V0.5C7.00106 0.224 6.77706 0 6.50106 0C6.22506 0 6.00106 0.224 6.00106 0.5V3.963C6.00106 5.021 6.11706 6.079 6.35106 7.129L6.94306 9.347L0.979058 15.203C-0.102942 16.123 -0.319942 17.697 0.476058 18.864C2.56706 21.936 6.79606 24 11.0001 24C15.2041 24 19.4341 21.937 21.5241 18.864C22.3201 17.697 22.1031 16.123 21.0471 15.227L21.0481 15.228ZM11.0001 6C11.1281 6 11.2561 5.952 11.3541 5.854C11.3711 5.837 12.9751 4.288 14.9961 4.048C14.9901 5.001 14.8861 5.957 14.6841 6.871L14.1161 8.999H7.88506L7.32206 6.891C7.11506 5.96 7.01106 5.004 7.00506 4.047C9.02606 4.286 10.6301 5.836 10.6471 5.853C10.7451 5.95 10.8731 5.999 11.0011 5.999L11.0001 6ZM20.6981 18.302C18.8141 21.069 14.8261 23 11.0001 23C7.17406 23 3.18606 21.068 1.30206 18.302C0.795058 17.558 0.935058 16.554 1.65406 15.941L7.70506 10.001H14.2971L20.3741 15.966C21.0661 16.555 21.2061 17.559 20.6991 18.303L20.6981 18.302Z" fill="currentColor"/>
                    </svg>
                    <span>لباس بچگانه</span>
                </li>
                <li class="category-dropdown__header-item" data-index="2">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0481 15.228L15.0591 9.348L15.6561 7.109C15.8851 6.075 16.0011 5.017 16.0011 3.964V0.5C16.0011 0.224 15.7771 0 15.5011 0C15.2251 0 15.0011 0.224 15.0011 0.5V3.036C13.1611 3.21 11.6571 4.279 11.0011 4.829C10.3451 4.279 8.84106 3.21 7.00106 3.036V0.5C7.00106 0.224 6.77706 0 6.50106 0C6.22506 0 6.00106 0.224 6.00106 0.5V3.963C6.00106 5.021 6.11706 6.079 6.35106 7.129L6.94306 9.347L0.979058 15.203C-0.102942 16.123 -0.319942 17.697 0.476058 18.864C2.56706 21.936 6.79606 24 11.0001 24C15.2041 24 19.4341 21.937 21.5241 18.864C22.3201 17.697 22.1031 16.123 21.0471 15.227L21.0481 15.228ZM11.0001 6C11.1281 6 11.2561 5.952 11.3541 5.854C11.3711 5.837 12.9751 4.288 14.9961 4.048C14.9901 5.001 14.8861 5.957 14.6841 6.871L14.1161 8.999H7.88506L7.32206 6.891C7.11506 5.96 7.01106 5.004 7.00506 4.047C9.02606 4.286 10.6301 5.836 10.6471 5.853C10.7451 5.95 10.8731 5.999 11.0011 5.999L11.0001 6ZM20.6981 18.302C18.8141 21.069 14.8261 23 11.0001 23C7.17406 23 3.18606 21.068 1.30206 18.302C0.795058 17.558 0.935058 16.554 1.65406 15.941L7.70506 10.001H14.2971L20.3741 15.966C21.0661 16.555 21.2061 17.559 20.6991 18.303L20.6981 18.302Z" fill="currentColor"/>
                    </svg>
                    <span>لباس بچگانه</span>
                </li>
                <li class="category-dropdown__header-item" data-index="2">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0481 15.228L15.0591 9.348L15.6561 7.109C15.8851 6.075 16.0011 5.017 16.0011 3.964V0.5C16.0011 0.224 15.7771 0 15.5011 0C15.2251 0 15.0011 0.224 15.0011 0.5V3.036C13.1611 3.21 11.6571 4.279 11.0011 4.829C10.3451 4.279 8.84106 3.21 7.00106 3.036V0.5C7.00106 0.224 6.77706 0 6.50106 0C6.22506 0 6.00106 0.224 6.00106 0.5V3.963C6.00106 5.021 6.11706 6.079 6.35106 7.129L6.94306 9.347L0.979058 15.203C-0.102942 16.123 -0.319942 17.697 0.476058 18.864C2.56706 21.936 6.79606 24 11.0001 24C15.2041 24 19.4341 21.937 21.5241 18.864C22.3201 17.697 22.1031 16.123 21.0471 15.227L21.0481 15.228ZM11.0001 6C11.1281 6 11.2561 5.952 11.3541 5.854C11.3711 5.837 12.9751 4.288 14.9961 4.048C14.9901 5.001 14.8861 5.957 14.6841 6.871L14.1161 8.999H7.88506L7.32206 6.891C7.11506 5.96 7.01106 5.004 7.00506 4.047C9.02606 4.286 10.6301 5.836 10.6471 5.853C10.7451 5.95 10.8731 5.999 11.0011 5.999L11.0001 6ZM20.6981 18.302C18.8141 21.069 14.8261 23 11.0001 23C7.17406 23 3.18606 21.068 1.30206 18.302C0.795058 17.558 0.935058 16.554 1.65406 15.941L7.70506 10.001H14.2971L20.3741 15.966C21.0661 16.555 21.2061 17.559 20.6991 18.303L20.6981 18.302Z" fill="currentColor"/>
                    </svg>
                    <span>لباس بچگانه</span>
                </li>
                <li class="category-dropdown__header-item" data-index="2">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0481 15.228L15.0591 9.348L15.6561 7.109C15.8851 6.075 16.0011 5.017 16.0011 3.964V0.5C16.0011 0.224 15.7771 0 15.5011 0C15.2251 0 15.0011 0.224 15.0011 0.5V3.036C13.1611 3.21 11.6571 4.279 11.0011 4.829C10.3451 4.279 8.84106 3.21 7.00106 3.036V0.5C7.00106 0.224 6.77706 0 6.50106 0C6.22506 0 6.00106 0.224 6.00106 0.5V3.963C6.00106 5.021 6.11706 6.079 6.35106 7.129L6.94306 9.347L0.979058 15.203C-0.102942 16.123 -0.319942 17.697 0.476058 18.864C2.56706 21.936 6.79606 24 11.0001 24C15.2041 24 19.4341 21.937 21.5241 18.864C22.3201 17.697 22.1031 16.123 21.0471 15.227L21.0481 15.228ZM11.0001 6C11.1281 6 11.2561 5.952 11.3541 5.854C11.3711 5.837 12.9751 4.288 14.9961 4.048C14.9901 5.001 14.8861 5.957 14.6841 6.871L14.1161 8.999H7.88506L7.32206 6.891C7.11506 5.96 7.01106 5.004 7.00506 4.047C9.02606 4.286 10.6301 5.836 10.6471 5.853C10.7451 5.95 10.8731 5.999 11.0011 5.999L11.0001 6ZM20.6981 18.302C18.8141 21.069 14.8261 23 11.0001 23C7.17406 23 3.18606 21.068 1.30206 18.302C0.795058 17.558 0.935058 16.554 1.65406 15.941L7.70506 10.001H14.2971L20.3741 15.966C21.0661 16.555 21.2061 17.559 20.6991 18.303L20.6981 18.302Z" fill="currentColor"/>
                    </svg>
                    <span>لباس بچگانه</span>
                </li>
                <li class="category-dropdown__header-item" data-index="2">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0481 15.228L15.0591 9.348L15.6561 7.109C15.8851 6.075 16.0011 5.017 16.0011 3.964V0.5C16.0011 0.224 15.7771 0 15.5011 0C15.2251 0 15.0011 0.224 15.0011 0.5V3.036C13.1611 3.21 11.6571 4.279 11.0011 4.829C10.3451 4.279 8.84106 3.21 7.00106 3.036V0.5C7.00106 0.224 6.77706 0 6.50106 0C6.22506 0 6.00106 0.224 6.00106 0.5V3.963C6.00106 5.021 6.11706 6.079 6.35106 7.129L6.94306 9.347L0.979058 15.203C-0.102942 16.123 -0.319942 17.697 0.476058 18.864C2.56706 21.936 6.79606 24 11.0001 24C15.2041 24 19.4341 21.937 21.5241 18.864C22.3201 17.697 22.1031 16.123 21.0471 15.227L21.0481 15.228ZM11.0001 6C11.1281 6 11.2561 5.952 11.3541 5.854C11.3711 5.837 12.9751 4.288 14.9961 4.048C14.9901 5.001 14.8861 5.957 14.6841 6.871L14.1161 8.999H7.88506L7.32206 6.891C7.11506 5.96 7.01106 5.004 7.00506 4.047C9.02606 4.286 10.6301 5.836 10.6471 5.853C10.7451 5.95 10.8731 5.999 11.0011 5.999L11.0001 6ZM20.6981 18.302C18.8141 21.069 14.8261 23 11.0001 23C7.17406 23 3.18606 21.068 1.30206 18.302C0.795058 17.558 0.935058 16.554 1.65406 15.941L7.70506 10.001H14.2971L20.3741 15.966C21.0661 16.555 21.2061 17.559 20.6991 18.303L20.6981 18.302Z" fill="currentColor"/>
                    </svg>
                    <span>لباس بچگانه</span>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="category-dropdown__content">
        <!-- Desktop View -->
        
        <div class="category-dropdown__desktop">
            <div class="category-dropdown__panel category-dropdown__panel--active" data-index="0">
                <div class="category-dropdown__panel-items">
                    <div class="category-dropdown__panel-scrollbar">
                        <a href="#" class="category-dropdown__panel-title scrollbar-title">
                            دسته‌بندی‌های زنانه
                            <svg width="4" height="10" viewBox="0 0 4 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.64568 9.22804C3.59932 9.2283 3.55336 9.21942 3.51044 9.20189C3.46752 9.18436 3.42848 9.15852 3.39557 9.12588L0.517471 6.24778C0.35344 6.08416 0.2233 5.88979 0.134503 5.6758C0.0457071 5.46181 0 5.23241 0 5.00072C0 4.76904 0.0457071 4.53964 0.134503 4.32565C0.2233 4.11166 0.35344 3.91728 0.517471 3.75367L3.39557 0.875574C3.42841 0.842728 3.46741 0.816674 3.51032 0.798898C3.55323 0.781122 3.59923 0.771973 3.64568 0.771973C3.69213 0.771973 3.73813 0.781122 3.78104 0.798898C3.82396 0.816674 3.86295 0.842728 3.8958 0.875574C3.92864 0.90842 3.9547 0.947413 3.97247 0.990328C3.99025 1.03324 3.9994 1.07924 3.9994 1.12569C3.9994 1.17214 3.99025 1.21814 3.97247 1.26105C3.9547 1.30397 3.92864 1.34296 3.8958 1.37581L1.0177 4.2539C0.819794 4.45206 0.70863 4.72066 0.70863 5.00072C0.70863 5.28079 0.819794 5.54939 1.0177 5.74755L3.8958 8.62564C3.92882 8.65839 3.95502 8.69735 3.97291 8.74028C3.99079 8.78321 4 8.82926 4 8.87576C4 8.92226 3.99079 8.96831 3.97291 9.01124C3.95502 9.05416 3.92882 9.09313 3.8958 9.12588C3.86288 9.15852 3.82384 9.18436 3.78092 9.20189C3.738 9.21942 3.69204 9.2283 3.64568 9.22804Z" fill="currentColor"/>
                            </svg>
                        </a>
                        @foreach(range(1, 10) as $number)
                            
                            <div class="category-dropdown__panel-item">
                                <a href="#" class="category-dropdown__panel-title">
                                    دسته‌بندی‌های زنانه
                                    <svg width="4" height="10" viewBox="0 0 4 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.64568 9.22804C3.59932 9.2283 3.55336 9.21942 3.51044 9.20189C3.46752 9.18436 3.42848 9.15852 3.39557 9.12588L0.517471 6.24778C0.35344 6.08416 0.2233 5.88979 0.134503 5.6758C0.0457071 5.46181 0 5.23241 0 5.00072C0 4.76904 0.0457071 4.53964 0.134503 4.32565C0.2233 4.11166 0.35344 3.91728 0.517471 3.75367L3.39557 0.875574C3.42841 0.842728 3.46741 0.816674 3.51032 0.798898C3.55323 0.781122 3.59923 0.771973 3.64568 0.771973C3.69213 0.771973 3.73813 0.781122 3.78104 0.798898C3.82396 0.816674 3.86295 0.842728 3.8958 0.875574C3.92864 0.90842 3.9547 0.947413 3.97247 0.990328C3.99025 1.03324 3.9994 1.07924 3.9994 1.12569C3.9994 1.17214 3.99025 1.21814 3.97247 1.26105C3.9547 1.30397 3.92864 1.34296 3.8958 1.37581L1.0177 4.2539C0.819794 4.45206 0.70863 4.72066 0.70863 5.00072C0.70863 5.28079 0.819794 5.54939 1.0177 5.74755L3.8958 8.62564C3.92882 8.65839 3.95502 8.69735 3.97291 8.74028C3.99079 8.78321 4 8.82926 4 8.87576C4 8.92226 3.99079 8.96831 3.97291 9.01124C3.95502 9.05416 3.92882 9.09313 3.8958 9.12588C3.86288 9.15852 3.82384 9.18436 3.78092 9.20189C3.738 9.21942 3.69204 9.2283 3.64568 9.22804Z" fill="currentColor"/>
                                    </svg>
                                </a>
                                <a class="category-dropdown__panel-item-link" href="#">لباس زنانه</a>
                                <a class="category-dropdown__panel-item-link" href="#">لباس زنانه</a>
                                <a class="category-dropdown__panel-item-link" href="#">لباس زنانه</a>
                                <a class="category-dropdown__panel-item-link" href="#">لباس زنانه</a>
                                <a class="category-dropdown__panel-item-link" href="#">لباس زنانه</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="category-dropdown__panel-swipers">
                    @php
                        $slides =[
                            [
                                'link' => '/category/turkish',
                                'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                                'alt' => 'سریال‌های ترکی'
                            ],
                            [
                                'link' => '/category/korean',
                                'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                                'alt' => 'سریال‌های کره‌ای'
                            ],
                            [
                                'link' => '/category/korean',
                                'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                                'alt' => 'سریال‌های ایرانی'
                            ],
                        ];
                    @endphp
                    @include('components.sliders.megamenu-categories-swiper', ['items' => $slides])
                    <div class="category-dropdown__panel__megamenu-brands">
                        <span class="title">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.671 12.925L13.592 3.93201C12.83 3.17701 11.736 2.81301 10.679 2.94801L4.31401 3.60701L0.854015 0.146006C0.658015 -0.0489941 0.342015 -0.0489941 0.146015 0.146006C-0.0499851 0.341006 -0.0489851 0.658006 0.146015 0.854006L3.60401 4.31201L2.88001 10.957C2.79601 11.987 3.17101 12.996 3.90701 13.725L12.972 22.694C13.822 23.537 14.947 24.001 16.143 24.001H16.161C17.363 23.996 18.492 23.523 19.339 22.671L22.694 19.288C24.439 17.527 24.429 14.674 22.67 12.926L22.671 12.925ZM21.984 18.582L18.629 21.965C17.971 22.629 17.094 22.996 16.158 23H16.144C15.213 23 14.338 22.64 13.677 21.983L4.61101 13.014C4.08501 12.493 3.81701 11.774 3.87601 11.051L4.51201 5.21901L6.28401 6.99101C6.10801 7.28801 6.00001 7.63101 6.00001 8.00001C6.00001 9.10301 6.89702 10 8.00002 10C9.10301 10 10 9.10301 10 8.00001C10 6.89701 9.10301 6.00001 8.00002 6.00001C7.63002 6.00001 7.28801 6.10801 6.99101 6.28401L5.22501 4.51801L10.789 3.94201C10.789 3.94201 10.798 3.94201 10.803 3.94201C11.564 3.83801 12.344 4.10301 12.89 4.64401L21.968 13.636C23.336 14.995 23.344 17.215 21.986 18.583L21.984 18.582ZM8.00002 7.00001C8.55202 7.00001 9.00002 7.44801 9.00002 8.00001C9.00002 8.55201 8.55202 9.00001 8.00002 9.00001C7.44802 9.00001 7.00001 8.55201 7.00001 8.00001C7.00001 7.44801 7.44802 7.00001 8.00002 7.00001ZM19.032 13.285C18.7 12.953 18.261 12.771 17.792 12.771H17.782C17.308 12.773 16.866 12.961 16.535 13.299L13.326 16.584C12.655 17.27 12.663 18.378 13.343 19.056L14.783 20.491C15.115 20.821 15.554 21.003 16.022 21.003H16.032C16.503 21 16.943 20.814 17.273 20.479L20.493 17.208C21.167 16.523 21.162 15.414 20.482 14.734L19.032 13.286V13.285ZM19.78 16.506L16.56 19.777C16.418 19.922 16.228 20.001 16.026 20.003H16.022C15.821 20.003 15.631 19.925 15.488 19.782L14.048 18.347C13.756 18.056 13.752 17.578 14.041 17.284L17.25 13.999C17.393 13.853 17.583 13.772 17.787 13.771C17.994 13.794 18.182 13.848 18.325 13.992L19.775 15.44C20.068 15.733 20.07 16.211 19.78 16.505V16.506Z" fill="black"/>
                            </svg>
                            برند های برگزیده
                        </span>
                        @include('components.sliders.megamenu-baners-swiper')
                    </div>
                </div>
            </div>
            <div class="category-dropdown__panel" data-index="1"></div>
            <div class="category-dropdown__panel" data-index="2"></div>
        </div>

        <!-- Mobile View -->
        <!-- This section should be scrollable on mobile -->
        <div class="category-dropdown__mobile">
            <a href="#" class="category-dropdown__panel-title ">
                دسته‌بندی‌های زنانه
                <svg width="4" height="10" viewBox="0 0 4 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.64568 9.22804C3.59932 9.2283 3.55336 9.21942 3.51044 9.20189C3.46752 9.18436 3.42848 9.15852 3.39557 9.12588L0.517471 6.24778C0.35344 6.08416 0.2233 5.88979 0.134503 5.6758C0.0457071 5.46181 0 5.23241 0 5.00072C0 4.76904 0.0457071 4.53964 0.134503 4.32565C0.2233 4.11166 0.35344 3.91728 0.517471 3.75367L3.39557 0.875574C3.42841 0.842728 3.46741 0.816674 3.51032 0.798898C3.55323 0.781122 3.59923 0.771973 3.64568 0.771973C3.69213 0.771973 3.73813 0.781122 3.78104 0.798898C3.82396 0.816674 3.86295 0.842728 3.8958 0.875574C3.92864 0.90842 3.9547 0.947413 3.97247 0.990328C3.99025 1.03324 3.9994 1.07924 3.9994 1.12569C3.9994 1.17214 3.99025 1.21814 3.97247 1.26105C3.9547 1.30397 3.92864 1.34296 3.8958 1.37581L1.0177 4.2539C0.819794 4.45206 0.70863 4.72066 0.70863 5.00072C0.70863 5.28079 0.819794 5.54939 1.0177 5.74755L3.8958 8.62564C3.92882 8.65839 3.95502 8.69735 3.97291 8.74028C3.99079 8.78321 4 8.82926 4 8.87576C4 8.92226 3.99079 8.96831 3.97291 9.01124C3.95502 9.05416 3.92882 9.09313 3.8958 9.12588C3.86288 9.15852 3.82384 9.18436 3.78092 9.20189C3.738 9.21942 3.69204 9.2283 3.64568 9.22804Z" fill="currentColor"/>
                </svg>
            </a>
            <!-- Limit to maximum 11 items + 1 "Show All" item -->

            <div class="category-dropdown__mobile__panel-items">
                @foreach(range(1, 11) as $number)
                    <a href="#" class="category-dropdown__mobile__panel-item">
                        <img src="{{asset('image/image39.png')}}" alt="Category Name">
                            <span>لباس زنانه</span>
                    </a>
                @endforeach
                <a href="#" class="category-dropdown__mobile__panel-item">
                    <img src="{{asset('icons/ui/imageShowAllCategory-dropdown.png')}}" alt="Category Name">
                    <span>نمایش همه</span>
                </a>
                
            </div>
            <div class="category-dropdown__mobile__panel-categories-swiper">
                @php
                    $slides =[
                        [
                            'link' => '/category/turkish',
                            'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                            'alt' => 'سریال‌های ترکی'
                        ],
                        [
                            'link' => '/category/korean',
                            'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                            'alt' => 'سریال‌های کره‌ای'
                        ],
                        [
                            'link' => '/category/korean',
                            'image' => 'image/1873-685-اسلایدر-سایت-های-تورک-c.jpg',
                            'alt' => 'سریال‌های ایرانی'
                        ],
                    ];
                @endphp
                @include('components.sliders.megamenu-categories-swiper', ['items' => $slides])
            </div>
            <div class="category-dropdown__mobile__panel-brands-swiper"> 
                <span class="title">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.671 12.925L13.592 3.93201C12.83 3.17701 11.736 2.81301 10.679 2.94801L4.31401 3.60701L0.854015 0.146006C0.658015 -0.0489941 0.342015 -0.0489941 0.146015 0.146006C-0.0499851 0.341006 -0.0489851 0.658006 0.146015 0.854006L3.60401 4.31201L2.88001 10.957C2.79601 11.987 3.17101 12.996 3.90701 13.725L12.972 22.694C13.822 23.537 14.947 24.001 16.143 24.001H16.161C17.363 23.996 18.492 23.523 19.339 22.671L22.694 19.288C24.439 17.527 24.429 14.674 22.67 12.926L22.671 12.925ZM21.984 18.582L18.629 21.965C17.971 22.629 17.094 22.996 16.158 23H16.144C15.213 23 14.338 22.64 13.677 21.983L4.61101 13.014C4.08501 12.493 3.81701 11.774 3.87601 11.051L4.51201 5.21901L6.28401 6.99101C6.10801 7.28801 6.00001 7.63101 6.00001 8.00001C6.00001 9.10301 6.89702 10 8.00002 10C9.10301 10 10 9.10301 10 8.00001C10 6.89701 9.10301 6.00001 8.00002 6.00001C7.63002 6.00001 7.28801 6.10801 6.99101 6.28401L5.22501 4.51801L10.789 3.94201C10.789 3.94201 10.798 3.94201 10.803 3.94201C11.564 3.83801 12.344 4.10301 12.89 4.64401L21.968 13.636C23.336 14.995 23.344 17.215 21.986 18.583L21.984 18.582ZM8.00002 7.00001C8.55202 7.00001 9.00002 7.44801 9.00002 8.00001C9.00002 8.55201 8.55202 9.00001 8.00002 9.00001C7.44802 9.00001 7.00001 8.55201 7.00001 8.00001C7.00001 7.44801 7.44802 7.00001 8.00002 7.00001ZM19.032 13.285C18.7 12.953 18.261 12.771 17.792 12.771H17.782C17.308 12.773 16.866 12.961 16.535 13.299L13.326 16.584C12.655 17.27 12.663 18.378 13.343 19.056L14.783 20.491C15.115 20.821 15.554 21.003 16.022 21.003H16.032C16.503 21 16.943 20.814 17.273 20.479L20.493 17.208C21.167 16.523 21.162 15.414 20.482 14.734L19.032 13.286V13.285ZM19.78 16.506L16.56 19.777C16.418 19.922 16.228 20.001 16.026 20.003H16.022C15.821 20.003 15.631 19.925 15.488 19.782L14.048 18.347C13.756 18.056 13.752 17.578 14.041 17.284L17.25 13.999C17.393 13.853 17.583 13.772 17.787 13.771C17.994 13.794 18.182 13.848 18.325 13.992L19.775 15.44C20.068 15.733 20.07 16.211 19.78 16.505V16.506Z" fill="black"/>
                    </svg>
                    برند های برگزیده
                </span>
                @include('components.sliders.megamenu-baners-swiper')
            </div>
        </div>
    </div>
</div>

<script>
class CategoryDropdown {
    constructor() {
        this.container = document.querySelector('.category-dropdown');
        this.items = document.querySelectorAll('.category-dropdown__header-item');
        this.panels = document.querySelectorAll('.category-dropdown__panel');
        this.defaultPanel = document.querySelector('.category-dropdown__panel[data-index="0"]');
        this.init();
    }

    init() {
        this.showDefaultPanel();
        this.bindEvents();
    }

    showDefaultPanel() {
        if (this.defaultPanel) {
            this.defaultPanel.classList.add('category-dropdown__panel--active');
        }
    }

    hideAllPanels() {
        this.panels.forEach(panel => panel.classList.remove('category-dropdown__panel--active'));
    }

    showPanel(index) {
        const targetPanel = document.querySelector(`.category-dropdown__panel[data-index="${index}"]`);
        if (targetPanel) {
            targetPanel.classList.add('category-dropdown__panel--active');
        }
    }

    bindEvents() {
        this.items.forEach(item => {
            item.addEventListener('mouseenter', () => {
                this.hideAllPanels();
                const index = item.getAttribute('data-index');
                this.showPanel(index);
            });
        });

        this.container.addEventListener('mouseleave', () => {
            this.hideAllPanels();
            this.showDefaultPanel();
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new CategoryDropdown();
});
</script>
@stack('megamenu-categories-swiper')
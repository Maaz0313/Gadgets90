<?php
require('header.php');
?>
<style>
    .container {
    margin: 0 auto;
    border: none;
    background: 0 0;
    width: 980px;
    box-shadow: none;
    position: relative;
    clear: both;
}
</style>
<div class="container" style="width: 100%;">
        <div class="grid grid-cols-4 gap-3 my-6 mx-6">
        <div><img class="w-16 md:w-32 lg:w-36" src="http://localhost/Gadgets90/img/poco-x5-5g.PNG" alt=""></div>
        <div class="col-span-3 grid grid-cols-3 gap-3">
            <div class="col-span-3"><h1 class="text-2xl font-bold">Poco X5 5G</h1></div>
            <div class="flex items-center cursor-pointer"><svg class="mr-1 flex items-center" width="15px" height="15px" viewBox="0 0 20 20" fill="#000" xmlns="http://www.w3.org/2000/svg"><path d="M10 1.6a8.4 8.4 0 1 0 0 16.8 8.4 8.4 0 0 0 0-16.8zm5 9.4h-4v4H9v-4H5V9h4V5h2v4h4v2z"></path></svg>&nbsp;<span>Compare</span></div>
            <div class="flex items-center cursor-pointer"><svg class="mr-1 flex items-center" width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000"><g><path data-name="comment-dots-Filled" d="M18,8H6V6H18V8M18,11H6V9H18V11M18,14H6V12H18V14M22,4A2,2 0 0,0 20,2H4A2,2 0 0,0 2,4V16A2,2 0 0,0 4,18H18L22,22V4Z"></path></g></svg>&nbsp;<span>Comment</span></div>
            <style>
                .modal {
                transition: opacity 0.25s ease;
                }
                body.modal-active {
                overflow-x: hidden;
                overflow-y: visible !important;
                }
            </style>
            <div class="flex items-center modal-open cursor-pointer"><svg class="mr-1 flex items-center" width="13px" height="13px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z"></path></svg>&nbsp;<span>Share</span></div>
             <!--MODAL STARTS-->
            <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                
                <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
                
                <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                    <span class="text-sm">(Esc)</span>
                </div>

                <!-- Add margin if you want to see some of the overlay behind the modal-->
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Share this product via</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                    </div>

                    <!-- Body
                    <a class="mr-1 flex items-center" href="https://www.facebook.com/sharer/sharer.php?u=https://www.findprix.com/mobiles/poco-x5-5g" title="Facebook" target="_blank" rel="nofollow noopener"> <svg class="whitebg border roundborder" style="padding:8px;width:40px" viewBox="0 0 24 24" width="40" height="40" fill="#1877f2"> <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"></path> </svg> </a>
                    <a class="mr-1 flex items-center" href="https://twitter.com/share?url=https://www.findprix.com/mobiles/poco-x5-5g" title="Twitter" target="_blank" rel="nofollow noopener"> <svg class="whitebg border roundborder" style="padding:8px;width:40px" viewBox="0 0 24 24" width="40" height="40" fill="#1da1f2"> <path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"></path> </svg> </a>
                    <p>...</p>
                    <p>...</p>
                    <p>...</p> -->

                    <!-- Footer -->
                    <div class="flex justify-center pt-2">
                    <a class="mr-1" href="https://www.facebook.com/sharer/sharer.php?u=https://www.findprix.com/mobiles/poco-x5-5g" title="Facebook" target="_blank" rel="nofollow noopener"> <svg class="whitebg border roundborder" style="padding:8px;width:40px" viewBox="0 0 24 24" width="40" height="40" fill="#1877f2"> <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"></path> </svg> </a>
                    <a class="mr-1" href="https://twitter.com/share?url=https://www.findprix.com/mobiles/poco-x5-5g" title="Twitter" target="_blank" rel="nofollow noopener"> <svg class="whitebg border roundborder" style="padding:8px;width:40px" viewBox="0 0 24 24" width="40" height="40" fill="#1da1f2"> <path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"></path> </svg> </a>
                    <a class="mr-1" href="https://pinterest.com/pin/create/button/?url=https://www.findprix.com/mobiles/poco-x5-5g" title="Pinterest" target="_blank" rel="nofollow noopener"> <svg class="whitebg border roundborder" style="padding:8px;width:40px" viewBox="0 0 774 1000.2" width="40" height="40" fill="#e60023"> <path d="M0 359c0-42 8.8-83.7 26.5-125s43-79.7 76-115 76.3-64 130-86S345.7 0 411 0c106 0 193 32.7 261 98s102 142.3 102 231c0 114-28.8 208.2-86.5 282.5S555.3 723 464 723c-30 0-58.2-7-84.5-21s-44.8-31-55.5-51l-40 158c-3.3 12.7-7.7 25.5-13 38.5S259.8 873 253.5 885c-6.3 12-12.7 23.3-19 34s-12.7 20.7-19 30-11.8 17.2-16.5 23.5-9 11.8-13 16.5l-6 8c-2 2.7-4.7 3.7-8 3s-5.3-2.7-6-6c0-.7-.5-5.3-1.5-14s-2-17.8-3-27.5-2-22.2-3-37.5-1.3-30.2-1-44.5 1.3-30.2 3-47.5 4.2-33.3 7.5-48c7.3-31.3 32-135.7 74-313-5.3-10.7-9.7-23.5-13-38.5s-5-27.2-5-36.5l-1-15c0-42.7 10.8-78.2 32.5-106.5S303.3 223 334 223c24.7 0 43.8 8.2 57.5 24.5S412 284.3 412 309c0 15.3-2.8 34.2-8.5 56.5s-13.2 48-22.5 77-16 52.5-20 70.5c-6.7 30-.8 56 17.5 78s42.8 33 73.5 33c52.7 0 96.2-29.8 130.5-89.5S634 402.7 634 318c0-64.7-21-117.5-63-158.5S470.3 98 395 98c-84 0-152.2 27-204.5 81S112 297.7 112 373c0 44.7 12.7 82.3 38 113 8.7 10 11.3 20.7 8 32-1.3 3.3-3.3 11-6 23s-4.7 19.7-6 23c-1.3 7.3-4.7 12.2-10 14.5s-11.3 2.2-18-.5c-39.3-16-68.8-43.5-88.5-82.5S0 411 0 359z"></path></svg> </a>
                    <a class="mr-1" href="https://api.whatsapp.com/send?text=https://www.findprix.com/mobiles/poco-x5-5g" title="WhatsApp" target="_blank" rel="nofollow noopener"> <svg class="whitebg border roundborder" style="padding:8px;width:40px" viewBox="0 0 24 24" width="40" height="40" fill="#25d366"> <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"></path> </svg> </a>
                    <a class="mr-1" href="https://telegram.me/share/url?url=https://www.findprix.com/mobiles/poco-x5-5g" title="Telegram" target="_blank" rel="nofollow noopener"> <svg class="whitebg border roundborder" style="padding:8px;width:40px" viewBox="0 0 24 24" width="40" height="40" fill="#229ed9"> <path d="M20.7 3.7 2.9 10.6c-1.2.4-1.2 1.1-.2 1.4l4.6 1.4 10.5-6.6c.5-.3 1-.1.6.2l-8.6 7.7-.3 4.7c.5 0 .7-.2 1-.5l2.2-2.1 4.6 3.4c.8.4 1.4.2 1.6-.8l3-14.2c.4-1.3-.4-1.8-1.2-1.5z"></path> </svg> </a>
                    </div>
                    
                </div>
                </div>
            </div>
            <!-- MODAL ENDS -->
            <div class="col-span-3"><p>Poco X5 5G best price in India is at ₹18,999. The lowest price of Poco X5 5G is ₹18,999 in Flipkart.com.</p>
            </div>
            <div class="col-span-3"><p class="text-xl font-medium">Key Specifications</p></div>
            <div style="background-color:#f6f6f4" class="col-span-3 grid grid-cols-3 gap-2">
            <div><p class="font-medium">Launch Date</p><br>March 21, 2023</div>
            <div><p class="font-medium">Front Camera</p><br>March 21, 2023</div>
            <div><p class="font-medium">Processor</p><br>March 21, 2023</div>
            <div><p class="font-medium">RAM</p><br>March 21, 2023</div>
            <div><p class="font-medium">Rear Camera</p><br>March 21, 2023</div>
            <div><p class="font-medium">Battery</p><br>March 21, 2023</div>
            <div><p class="font-medium">Storage</p><br>March 21, 2023</div>
            <div><p class="font-medium">Operating System</p><br>March 21, 2023</div>
            <div><p class="font-medium">Display</p><br>March 21, 2023</div>
            </div>
        </div>
    </div>
    <div class="my-6 mx-6 pt-2 border-t-2 border-black">
    <b>Xiaomi Poco X5 GT - The Latest Model From The X5 Series!</b> <br>
Xiaomi is launching the new Poco X5 series with a brand new GT model that will be available soon in markets. It might be the high-end model of this series, according to leaks and news. The new GT model is rumoured to include features like a larger AMOLED display, improved camera capabilities, a powerful processor, and a larger battery capacity. These features make it stand out from its predecessors and make it an ideal choice for those looking for a high-end smartphone. Let's reveal the amazing features of Xiaomi's Poco X5 GT, featuring a larger 6.67-inch HD+ OLED Capacitive Touchscreen display with a 120Hz refresh rate and 1080 x 2400 pixel resolution. The Xiaomi Poco X5's a well-known Adreno 618 GPU that will allow users to load graphics in high resolution without any errors. A further advantage of this device is the fact that it comes with 12GB of RAM and 512GB of internal storage. Poco X5 GT is fitted with a powerful and well-known Qualcomm Snapdragon 7 Gen 2 chipset, as well as an Octa Core CPU. There is no doubt that the couple of these processors will be able to handle multiple large applications without any problems. Xiaomi Poco's X5 GT has got a triple camera set up with the main camera being 50 MP, and two others being 8 MP and 2 MP. These massive sensors will be able to enhance the quality of photography on this smartphone. On the front, it will have a single 16 MP selfie camera. As part of the Xiaomi X5 GT, the battery has been increased to 5500mAh, so that it can last all day on just one charge, and it is able to support fast charging of 67W so that it can be fully charged within minutes. Samsung and other brands are going to face a new challenger in the form of the Poco X5 GT by Xiaomi.
    </div>
    <div class="my-6 mx-6">
        <h2 class="text-lg font-bold">Poco X5 5G Full Specifications</h2>
        <table class="table-auto border-solid border-2 border-black">
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2" rowspan="6">Build</TH>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">OS</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Android 12</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">UI</th>
                <td  class="border-solid border-2 border-black py-2 px-2">MIUI 13 for POCO</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Dimensions</th>
                <td  class="border-solid border-2 border-black py-2 px-2">165.8 x 76.2 x 7.9 mm</td>
            </tr>
            <tr>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Weight</th>
                <td  class="border-solid border-2 border-black py-2 px-2">188 g</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">SIM</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Hybrid Dual SIM, Dual Standby, (Nano-SIM)</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Colors</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Various</td>
            </tr>
            <?php //SECOND SECTION:?>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2" rowspan="4">Frequency</td>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">2G Band</th>
                <td  class="border-solid border-2 border-black py-2 px-2"><b>SIM1:</b> GSM 850 / 900 / 1800 / 1900<br><b>SIM2:</b> GSM 850 / 900 / 1800 / 1900 &nbsp;</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">3G Band</th>
                <td  class="border-solid border-2 border-black py-2 px-2">HSDPA 850 / 900 / 2100</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">4G Band</th>
                <td  class="border-solid border-2 border-black py-2 px-2">LTE</td>
            </tr>
            <tr>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">5G Band</th>
                <td  class="border-solid border-2 border-black py-2 px-2">SA/NSA</td>
            </tr>
            <?php //THIRD SECTION:?>
            <tr>
                <th align="left" class="bordesolid border-2 border-black py-2 px-2" rowspan="4">Performance</td>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">CPU</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Octa Core</td>
            </tr>
            <tr>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">RAM</th>
                <td  class="border-solid border-2 border-black py-2 px-2">6 GB/8 GB</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Chipset</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Qualcomm Snapdragon 695, 6 nm</td>
            </tr>
            
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">GPU</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Adreno 619</td>
            </tr>
            <?php //FOURTH SECTION:?>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2" rowspan="5">Display</TH>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Technology</td>
                <td  class="border-solid border-2 border-black py-2 px-2">AMOLED Capacitive Touchscreen, Multitouch</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Size</th>
                <td  class="border-solid border-2 border-black py-2 px-2">6.67 Inches</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Resolution</th>
                <td  class="border-solid border-2 border-black py-2 px-2">1080 x 2400 Pixels (~395 PPI)</td>
            </tr>
            <tr>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Protection</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Corning Gorilla Glass 3</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Extra Features</th>
                <td  class="border-solid border-2 border-black py-2 px-2">120Hz, 700 nits (HBM), 1200 nits (peak)</td>
            </tr>
            <?php //FIFTH SECTION:?>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2" rowspan="2">Memory</TH>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Internal Storage</td>
                <td  class="border-solid border-2 border-black py-2 px-2">128 GB, UFS 2.2</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Memory Card Slot</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Yes, Up to 1 TB</td>
            </tr>
            <?php //SIXTH SECTION:?>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2" rowspan="4">Camera</TH>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Rear Camera</td>
                <td  class="border-solid border-2 border-black py-2 px-2">Triple <br>48 MP f/1.8 (wide) <br> 8&thinsp;MP f/2.2 (ultra wide) <br> 2&thinsp;MP f/2.4 (macro)</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Flash</th>
                <td  class="border-solid border-2 border-black py-2 px-2">dual-LED dual-tone flash</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Front Camera</th>
                <td  class="border-solid border-2 border-black py-2 px-2">13 MP, f/2.5, (wide), HDR, Video (1080p@30fps)  </td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Features</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Geo-tagging, touch focus, face detection, HDR,<br> panorama, Video (1080p@30fps)</td>
            </tr>
            <!-- SEVENTH SECTION -->
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2" rowspan="8">Connectivity</TH>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">WLAN</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Wi-Fi 802.11 a/b/g/n/ac, dual-band</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Bluetooth</th>
                <td  class="border-solid border-2 border-black py-2 px-2">v5.1 with A2DP, LE</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">GPS</th>
                <td  class="border-solid border-2 border-black py-2 px-2">A-GPS support & Glonass, BDS</td>
            </tr>
            <tr>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Radio</th>
                <td  class="border-solid border-2 border-black py-2 px-2">FM Radio, with recording option</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">USB</th>
                <td  class="border-solid border-2 border-black py-2 px-2">	USB Type-C 2.0, OTG</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">NFC</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Yes, with Google Pay</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Infrared</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Yes</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Data</th>
                <td  class="border-solid border-2 border-black py-2 px-2">GPRS, Edge, 3G (HSPA 42.2/5.76 Mbps), 4G LTE-A, 5G capable</td>
            </tr>
            <!-- EIGHT SECTION -->
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2" rowspan="2">Battery</TH>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Capacity</th>
                <td  class="border-solid border-2 border-black py-2 px-2">(Li-Po Non removable), 5000 mAh</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Charging</th>
                <td  class="border-solid border-2 border-black py-2 px-2">33W fast charging<br>33W in-box charger with USB-C</td>
            </tr>
            <!-- NINETH SECTION -->
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2" rowspan="7">Features</TH>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Sensors</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Accelerometer, Electronic Compass, <font color="#000077"><b>Fingerprint (side mounted)</b></font>,<br> Gyro, Proximity, IR blaster, Ambient light sensor</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Audio</th>
                <td  class="border-solid border-2 border-black py-2 px-2">3.5mm Audio Jack, 24-bit/192kHz audio, Speaker Phone, Hi-Res Audio certification</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Browser</th>
                <td  class="border-solid border-2 border-black py-2 px-2">HTML5</td>
            </tr>
            <tr>
                <th align="left"  class="border-solid border-2 border-black py-2 px-2">Messaging</th>
                <td  class="border-solid border-2 border-black py-2 px-2">SMS(threaded view), MMS, Email, Push Mail, IM</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Games</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Built-in + Downloadable</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Torch</th>
                <td  class="border-solid border-2 border-black py-2 px-2">Yes</td>
            </tr>
            <tr>
                <th align="left" class="border-solid border-2 border-black py-2 px-2">Extra</th>
                <td  class="border-solid border-2 border-black py-2 px-2">NFC (market/region dependent), IP53, dust and splash resistant,<br> Photo/video editor, Document viewer</td>
            </tr>
        </table>
    </div>
</div>

 
<!-- Script for modal -->
  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
<?php require('footer.php'); ?>
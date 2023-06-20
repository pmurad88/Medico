<?php 

get_header();
?>
<div class="py-10">
    <div class="container">
        <div class="grid grid-cols-2 gap-6">
            <div class="flex flex-col gap-y-5">
                <h4 class="text-primary">ঢাকা শাখা</h4>
                <h1>মেডিকেল + ভার্সিটি Math কোর্স 2023</h1>
                <p>শব্দ গুলো দেখে সকলেই অবাক হয়েছে, ভাবছেন, এ সব শব্দের  নিজে থেকে বানানো। তবে সত্যটা হলো, এর একটাও বানানো নয়। শব্দ গুলো দেখে সকলেই অবাক হয়েছে, এটা বলা বাহুল্য। যাদের মূল টার্গেট তাদের  কোর্স’ সম্পূর্ণ ফ্রি! এছাড়া এখন এই এডমিশন প্রোগ্রামে ভর্তি হলে ‘HSC বোর্ড রিভিশন ও প্রি-এডমিশন’ কোর্স ফ্রি-তে থাকছেই!</p>  
                <div class="flex flex-wrap items-center gap-x-5">
                    <label class="service-input">
                        <input type="radio" name="service" checked="checked">
                        <span>Regular Course</span>
                    </label>
                    <label class="service-input">
                        <input type="radio" name="service">
                        <span>Exam Batch</span>
                    </label>
                </div>
                <div class="">
                    <a class="btn btn-secondary mt-2" href="">
                        Enroll Now
                    </a>
                </div>
            </div>
            <div class="program owl-carousel overflow-hidden">
                <div class="">
                    <img src="<?php echo get_theme_file_uri( 'assets/img/single-slider.jpg' )?>" alt="">
                </div>
                <div class="">
                    <img src="<?php echo get_theme_file_uri( 'assets/img/single-slider2.jpg' )?>" alt="">
                </div>
            </div>
        </div>
        <div class="pt-10">
            <div class="max-w-[590px]">
                <ul class="P-details-list grid grid-cols-2 text-center text-heading text-xl">
                    <li data-tab=".program-detail-tab" class="border-b-4 border-background pb-5 transition-all duration-300 nav-link cursor-pointer font-medium">প্রোগ্রাম ডিটেইলস</li>
                    <li data-tab=".program-material-tab" class="border-b-4 border-background pb-5 transition-all duration-300 nav-link cursor-pointer font-medium">স্টাডি ম্যাটেরিয়ালস</li>
                </ul>
            </div>
            <div class="programs-details-blog tab-content active program-detail-tab pt-8">
                <div class="border p-5 my-6 bg-backgrfound rounded w-[590px]">
                    <h6 class="accordion-title relative text-lg font-semibold ">
                        মেডিকেল এন্ড ডেন্টাল ফুল কোর্স ২০২৩  
                    </h6>
                    <div class="accordion-content text-peraghaph pl-5 pt-8 prose">
                        <ul>
                            <li>৮টি প্রিন্টেড বোর্ড সল্যুশন বুক।</li>
                            <li>১৪০টি বোর্ড রিভিশন ও প্রি-এডমিশন লাইভ ক্লাস।</li>
                            <li>সপ্তাহে ৫ দিন বোর্ড রিভিশন ক্লাস (বাংলা,ইংরেজিসহ সকল বিষয়)</li>
                            <li>সপ্তাহে ২ দিন প্রি-এডমিশন ক্লাস (মেডিকেল/ইঞ্জিনিয়ারিং/ভার্সিটি)</li>
                            <li>১৫০+ এডমিশন মাস্টার ক্লাস (রেকর্ডেড)</li>
                            <li>ডাউট সলভিংয়ে সার্বক্ষণিক Q&A সার্ভিস।</li>
                        </ul>
                    </div>
                </div>
                <div class="adn-item border border-border p-5 my-4 bg-background rounded w-[590px]">
                    <h6 class="accordion-title relative text-lg font-semibold">
                        মেডিকেল এন্ড ডেন্টাল ফুল কোর্স ২০২৩  
                    </h6>
                    <div class="accordion-content text-peraghaph pl-5 pt-8 prose">
                        <ul>
                            <li>৮টি প্রিন্টেড বোর্ড সল্যুশন বুক।</li>
                            <li>১৪০টি বোর্ড রিভিশন ও প্রি-এডমিশন লাইভ ক্লাস।</li>
                            <li>সপ্তাহে ৫ দিন বোর্ড রিভিশন ক্লাস (বাংলা,ইংরেজিসহ সকল বিষয়)</li>
                            <li>সপ্তাহে ২ দিন প্রি-এডমিশন ক্লাস (মেডিকেল/ইঞ্জিনিয়ারিং/ভার্সিটি)</li>
                            <li>১৫০+ এডমিশন মাস্টার ক্লাস (রেকর্ডেড)</li>
                            <li>ডাউট সলভিংয়ে সার্বক্ষণিক Q&A সার্ভিস।</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content program-material-tab pt-10">
            <div class="grid grid-cols-3 gap-4">
                <div class="max-w-sm object-cover left-0 p-20 bg-[#EBF6F6] relative group overflow-hidden">
                    <img class=" aspect-[6/8] max-w-sm group-hover:translate-y-[-15px] transition-all duration-200" src="<?php echo get_theme_file_uri('assets/img/sample-03.png')?>" alt="">
                    <div class="absolute left-1/2 -translate-x-1/2 group-hover:bottom-4 -bottom-11 transition-all duration-300">
                        <a class="btn btn-primary" href="">
                            Read Sample
                        </a>
                    </div>
                </div>
                <div class="max-w-sm object-cover left-0 p-20 bg-[#EBF6F6] relative group overflow-hidden">
                    <img class=" max-w-sm group-hover:translate-y-[-15px] transition-all duration-200" src="<?php echo get_theme_file_uri('assets/img/sample-03.png')?>" alt="">
                    <div class="absolute left-1/2 -translate-x-1/2 group-hover:bottom-4 -bottom-11 transition-all duration-300">
                        <a class="btn btn-primary" href="">
                            Read Sample
                        </a>
                    </div>
                </div>
                <div class="max-w-sm object-cover left-0 p-20 bg-[#EBF6F6] relative group overflow-hidden">
                    <img class=" max-w-sm group-hover:translate-y-[-15px] transition-all duration-200" src="<?php echo get_theme_file_uri('assets/img/sample-03.png')?>" alt="">
                    <div class="absolute left-1/2 -translate-x-1/2 group-hover:bottom-4 -bottom-11 transition-all duration-300">
                        <a class="btn btn-primary" href="">
                            Read Sample
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>
@extends('layouts.empty')

@section('content')
<section class="booking-step">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 shadow">
                <h4 class="text-center fs-sm-3">Thank you for your enquiry.</h4>
                <p class="text-center">One of our advisors will be in touch shortly.</p>

                <div class="left-side">
                    <div class="left-heading">
                        <p>What's next?</p>
                    </div>
                    
                    <ul class="progress-bar">
                        <li class="active">
                            <h2>Confirmation</h2>
                            <p class="text-wrap word-wrap">We will contact you today for a more detailed discussion about your survey requirements.</p>
                        </li>
                        <li>
                            <h2>
                                Inspection
                            </h2>
                            <p class="text-wrap word-wrap">
                                Once all is agreed with you, we will contact the homeowner or the agent to arrange the inspection visit.
                            </p>
                        </li>
                        <li>
                            <h2>
                                Invoice and T&C
                            </h2>
                            <p class="text-wrap word-wrap">
                                The invoice with T&C will be emailed to you.
                            </p>
                        </li>
                        <li>
                            <h2>
                                Survey Report
                            </h2>
                            <p class="text-wrap word-wrap">
                                Most of the reports are sent within two working days.
                            </p>
                        </li>
                        
                    </ul>
                </div>
                {{-- <div class="container max-w-4xl px-8 md:px-16 py-12 md:mx-auto bg-white rounded-3xl shadow-lg"><p class="text-center text-4xl font-bold">Thank you for your enquiry.</p><p class="text-center">One of our advisors will be in touch shortly.</p><div class="w-full md:w-11/12 mx-auto bg-primary-50 px-1 md:px-7 rounded-2xl mt-8 pb-8"><p class="py-8 text-primary-800 font-bold text-center">What's next?</p><div class="flex flex-col mx-8 border-l-2 border-primary-500 pl-6"><div class="relative"><div class="absolute left-[-42px] text-white border border-primary-500 w-8 h-8 bg-primary-500 text-center rounded-full"><p class="absolute top-[15%] left-[11.5px]">1</p></div><div class="pb-8 px-2 md:px-4"><p class="font-bold text-xl">Confirmation</p><p>One of our advisors will call you within 2 working hours to confirm the cost and surveyor availability.</p></div></div><div class="relative"><div class="absolute left-[-42px] text-primary-500 bg-white border border-primary-500 w-8 h-8 text-center rounded-full"><p class="absolute top-[15%] left-[11.5px]">2</p></div><div class="pb-8 px-2 md:px-4"><p class="font-bold text-xl">Surveyor visit</p><p>90% of our survey visits are carried out within 1 week of your enquiry.</p></div></div><div class="relative"><div class="absolute left-[-42px] text-primary-500 bg-white border border-primary-500 w-8 h-8 text-center rounded-full"><p class="absolute top-[15%] left-[11.5px]">3</p></div><div class="px-2 md:px-4"><p class="font-bold text-xl">Report sent</p><p>After the survey, 99% of our reports are sent within 5 working days, most of them a lot sooner due to Houzecheck's cutting edge technology.</p></div></div></div></div><p class="mt-8 text-xl text-center">Please call us on <a href="tel:03301131133"><strong>0330 113 1133</strong></a> if you require any further assistance.</p></div> --}}
                <div class="text-center pt-4">
                    <p class="mt-8 text-sm text-secondary-500">If you need any assistance, please call us on <a href="tel:03301131133"><strong>07999474078</strong></a> during Mon to Fri, 9AM to 5PM.</p>
                    <div class="container d-flex align-items-center justify-content-center mt-4" >
                        <a href="https://www.ricsfirms.com/office/220019/SurveyAll-Ltd" target="_blank">
                            <img src="{{ asset('user-assets/assets/img/rics-logo.png')}}" height="80" alt="">
                          </a>
                          <a target="_blank" href="https://www.google.com/search?q=surveyall+ltd+google+reviews+&sxsrf=AB5stBidw4M7Ungm-pAXefhRYM_eeTpfMg%3A1689949204319&ei=FJS6ZPOLE5-chbIPzf2Z-AI&ved=0ahUKEwjz5Yuw_5-AAxUfTkEAHc1-Bi8Q4dUDCA8&uact=5&oq=surveyall+ltd+google+reviews+&gs_lp=Egxnd3Mtd2l6LXNlcnAiHXN1cnZleWFsbCBsdGQgZ29vZ2xlIHJldmlld3MgMgUQIRigATIFECEYoAEyBRAhGKABMgUQIRigAUiYRVAAWMwdcAF4AZABAJgB8QegAe4XqgEPMC40LjEuMC4xLjAuMS4xuAEDyAEA-AEB-AECwgIHECMYigUYJ8ICCxAuGK8BGMcBGIAEwgIKEAAYgAQYsQMYCsICBxAAGIAEGArCAgQQABgDwgILEC4YgAQYxwEYrwHCAhoQLhiABBjHARivARiXBRjcBBjeBBjgBNgBAcICBhAAGBYYHuIDBBgAIEGIBgG6BgYIARABGBQ&sclient=gws-wiz-serp#lrd=0x47d8a947b844d953:0x365be7222122ced3,1,,,,">
                            <img src="{{ asset('img/logo/googlereview.svg')}}" class="img-responsive g-review ms-3" height="50" alt="">
                          </a>
                    </div>
                </div>
        </div>
    </div>
    
</section>

@endsection
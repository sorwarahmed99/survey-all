@extends('layouts.empty')

@section('content')

<section class="booking-step rounded">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 shadow" style="background-color: #fff;">
                <h4>Hello {{$booking->name}}</h4>
                <p style="font-size: 1rem;">Before we proceed, we need a little more information from you. So we can provide you with the best service.</p>
                <label class="mb-3" for="">Which of the following services do you require?</label>
                <form action="{{ route('booking.step2store', $booking) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12" id="rics-survey">
                            <div class="input-container ">
                                <input id="walk" class="radio-button job-type-radio" name="job_type" type="radio" value="RICS Home Survey" @if(old('job_type') == 'RICS Home Survey') checked @endif />
                                <div class="radio-tile">
                                <div class="icon walk-icon bg-white rounded p-3 mb-2">
                                    <img src="{{ asset('user-assets/assets/img/s-1.png') }}" height="40" alt="">
                                </div>
                                <label for="walk" class="radio-tile-label">RICS Home Survey</label>
                                {{-- <p class="text-center">Level 2 Homebuyer with or without valuation or Level 3 Building Survey</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 rounded ml-2" id="rics-valuation">
                            <div class="input-container">
                                <input id="walk" class="radio-button job-type-radio" name="job_type" type="radio" value="RICS Home Valuation" {{(old('job_type') == 'RICS Home Valuation') ? 'checked' : ''}} />
                                <div class="radio-tile">
                                <div class="icon walk-icon bg-white rounded p-3 mb-2">
                                    <img src="{{ asset('user-assets/assets/img/s-2.png') }}" height="40" alt="">
                                </div>
                                <label for="walk" class="radio-tile-label">RICS Home Valuation</label>
                                {{-- <p class="text-center">Professional Valuation for purposes such as help to buy, shared ownership and probate</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 rounded ml-2" id="other">
                            <div class="input-container">
                                <input id="buildingdefect" class="radio-button job-type-radio" name="job_type" type="radio" value="Building Defect Survey" {{(old('job_type') == 'Building Defect Survey') ? 'checked' : ''}} />
                                <div class="radio-tile">
                                <div class="icon walk-icon bg-white rounded p-3 mb-2">
                                    <img src="{{ asset('user-assets/assets/img/s-3.png') }}" height="40" alt="">
                                </div>
                                <label for="buildingdefect" class="radio-tile-label">Building Defect Survey</label>
                                {{-- <p class="text-center">Any other RICS service such as land survey, party wall, defect analysis</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 rounded ml-2" id="other">
                            <div class="input-container">
                                <input id="mouldanddamp" class="radio-button job-type-radio" name="job_type" type="radio" value="Mould and Damp Survey" {{(old('job_type') == 'Mould and Damp Survey') ? 'checked' : ''}} />
                                <div class="radio-tile">
                                <div class="icon walk-icon bg-white rounded p-3 mb-2">
                                    <img src="{{ asset('user-assets/assets/img/s-4.png') }}" height="40" alt="">
                                </div>
                                <label for="mouldanddamp" class="radio-tile-label">Mould and Damp Survey</label>
                                {{-- <p class="text-center">Any other RICS service such as land survey, party wall, defect analysis</p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 rounded ml-2" id="other">
                            <div class="input-container">
                                <input id="propertySearches" class="radio-button job-type-radio" name="job_type" type="radio" value="Property Searches" {{(old('job_type') == 'Property Searches') ? 'checked' : ''}} />
                                <div class="radio-tile">
                                <div class="icon walk-icon bg-white rounded p-3 mb-2">
                                    <img src="{{ asset('user-assets/assets/img/s-5.png') }}" height="40" alt="">
                                </div>
                                <label for="propertySearches" class="radio-tile-label">Property Searches</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 survey-type" @if(old('job_type') !== 'RICS Survey') style="display:none;" @endif id="surveys">
                        <label for="survey_type" class="">Please confirm which RICS survey do you require?</label>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between mt-4">
                                <div class="input-container">
                                    <input id="walk" class="radio-button" name="survey_type" type="radio" value="RICS Level 2 (Homebuyer Survey)" />
                                    <div class="radio-tile">
                                        <div class="icon walk-icon bg-white rounded mb-2 p-2">
                                            <img class="imag" src="{{ asset('user-assets/assets/img/l-1.png') }}" alt="">
                                        </div>
                                        <label for="walk" class="radio-tile-label">RICS Level 2 (Homebuyer Survey)</label>
                                        {{-- <p class="mt-3 text-base"></p> --}}
                                        <ul class="list-['✓'] ml-3 text-primary-800 text-sm">
                                            <li class="pl-3 leading-6 md:leading-5 mb-2">
                                                <i class="fa-solid fa-check"></i>Most popular condition survey
                                            </li>
                                            <li class="pl-3 leading-6 md:leading-5 mb-2">
                                                <i class="fa-solid fa-check"></i>Concise easy to understand report</li>
                                            <li class="pl-3 leading-6 md:leading-5 mb-2">
                                                <i class="fa-solid fa-check"></i>Suitable for most standard properties</li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-between mt-4">
                                <div class="input-container">
                                    <input id="walk" class="radio-button" name="survey_type" type="radio" value="RICS Level 3 (Building Survey)" />
                                    <div class="radio-tile">
                                        <div class="icon walk-icon bg-white rounded mb-2 p-2">
                                            <img class="imag" src="{{ asset('user-assets/assets/img/l2.png') }}" height="40" alt="">
                                        </div>
                                        <label for="walk" class="radio-tile-label">RICS Level 3 (Building Survey)</label>
                                        <ul class=" ml-3 text-primary-800 text-sm mt-2">
                                            <li class="pl-3 leading-6 md:leading-5 mb-2">
                                                <i class="fa-solid fa-check "></i>Most comprehensive condition survey</li>
                                            <li class="pl-3 leading-6 md:leading-5 mb-2">
                                                <i class="fa-solid fa-check "></i>Detailed construction and condition advice</li>
                                            <li class="pl-3 leading-6 md:leading-5 mb-2">
                                                <i class="fa-solid fa-check "></i><span class="ml-2">Ideal for larger, older or non-standard properties</span></li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 valuation-reason" @if(old('job_type') !== 'RICS Valuation') style="display:none;" @endif id="valuation">
                        <label for="survey_type" class="p-1 mb-3">Please confirm the reason for the RICS Valuation?</label>
                        <div class="col-md-3 p-1">
                            <div class="form-group">
                                <input type="radio" name="val_reason" class="btn-check form-control sev_check mt-3" id="MarketValuation" value="Market Valuation" autocomplete="off">
                                <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 w-100" for="MarketValuation">Market Valuation</label>
                            </div>
                        </div>
                        
                        <div class="col-md-3 p-1">
                            <div class="form-group">
                                <input type="radio" name="val_reason" class="btn-check form-control sev_check mt-3" id="Buyinghome" value="Buying A House" autocomplete="off">
                                <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 w-100" for="Buyinghome">Buying A House</label>
                            </div>
                        </div>
                        <div class="col-md-3 p-1">
                            <div class="form-group text-left">
                                <input type="radio" name="val_reason" class="btn-check form-control sev_check mt-3" id="SellingHome" value="Selling A House"autocomplete="off">
                                <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 w-100" for="SellingHome">Selling A House</label>
                            </div>
                        </div>
                        <div class="col-md-3 p-1" id="any-other-reason">
                            <div class="form-group">
                                <input type="radio" name="val_reason" class="btn-check form-control sev_check mt-3" id="Anyotherreason" value="Other reason" autocomplete="off">
                                <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 w-100" for="Anyotherreason">Any other reason</label>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row mt-3" @if(old('job_type') !== 'RICS Valuation' && old('val_reason') !== 'Help to buy') style="display:none;" @endif id="help-to-buy"> --}}
                    <div class="row mt-3" style="display:none;"  id="help-to-buy">
                        <label for="survey_type" class="text-sm">Please confirm specific reason</label>
                        <div class="form-group mt-3">
                            <input type="radio" value="Redeeming loan" name="specific_reason_for_valuation_reason_help_to_buy" class="btn-check form-control sev_check" id="reddeming-loan" autocomplete="off">
                            <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4" for="reddeming-loan">Redeeming loan</label>

                            <input type="radio" name="specific_reason_for_valuation_reason_help_to_buy" class="btn-check form-control sev_check" id="Re-mortgaging" value="Re-mortgaging" autocomplete="off">
                            <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 " for="Re-mortgaging">Re-mortgaging</label>
                        </div>
                    </div>

                    
                    <div class="row mt-3" @if(old('val_reason') !== 'Shared ownership') style="display:none;" @endif id="shared-ownership">
                    {{-- <div class="row mt-3" style="display:none;" id="shared-ownership"> --}}
                        <label for="survey_type" class="">Please confirm specific reason</label>
                        <div class="form-group mt-3">
                            <input type="radio" name="specific_reason_for_shared_ownership" class="btn-check form-control sev_check" id="Selling" value="Selling" autocomplete="off">
                            <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4" for="Selling">Selling</label>

                            <input type="radio" name="specific_reason_for_shared_ownership" class="btn-check form-control sev_check" id="Staircasing" value="Staircasing" autocomplete="off">
                            <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 " for="Staircasing">Staircasing</label>

                            <input type="radio" name="specific_reason_for_shared_ownership" class="btn-check form-control sev_check" id="Remortgaging" value="Re-mortgaging" autocomplete="off">
                            <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 " for="Remortgaging">Re-mortgaging</label>
                        </div>
                    </div>

                    <div class="row mt-3 other-reason" 
                            @if(old('job_type') !== 'Other Service') style="display:none;" @endif id="other_service">
                        <label for="other_service" class=" ">Please explain what you are looking for</label>
                        <div class="form-group mt-3 w-100">
                            <textarea class="form-control border-2 border-primary" value="{{ old('other_service') }}" name="other_service" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row mt-3 val-other-reason" @if( old('val_reason') !== 'Other reason') style="display:none;" @endif id="val_other_reason">
                    {{-- <div class="row mt-3 val-other-reason" style="display:none;" id="val_other_reason"> --}}
                        <label for="val_other_reason" class=" ">Please explain specific reason</label>
                        <div class="form-group mt-3 w-100">
                            <textarea class="form-control border-2 border-primary" value="{{ old('val_other_reason') }}" name="val_other_reason" rows="3"></textarea>
                        </div>
                        
                        <div class="row">
                            <label for="val_for_lending" class="mt-3">Is the valuation required for lending purposes?</label>
                            <div class="form-group mt-3">
                                <input type="radio" name="val_for_lending_purpose" class="btn-check form-control sev_check" id="Yes" value="Yes" autocomplete="off">
                                <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4" for="Yes">Yes</label>
    
                                <input type="radio" name="val_for_lending_purpose" class="btn-check form-control sev_check" id="No" value="No" autocomplete="off">
                                <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 " for="No">No</label>
    
                                <input type="radio" name="val_for_lending_purpose" class="btn-check form-control sev_check" id="Idon'tknow" value="I don't know" autocomplete="off">
                                <label class="btn btn-outline-primary fs-6 fw-normal py-2 px-4 " for="Idon'tknow">I don't know</label>
                            </div>
                        </div>
                    </div>

                    @foreach ($errors->all() as $error)
                        <div class="mt-3">
                            <li class="text-danger list-group-item">
                                Please answer this question in order to proceed 
                                <br>
                               <span class="mb-2">
                                    The following questions must be answered
                                </span> 
                            </li>
                            <li class="text-danger fw-bold">{{ $error }}</li>
                        </div>
                    @endforeach
                    
                    
                    <div class="py-6 d-flex justify-content-between bottom-0 w-100 right-0 text-center mt-4">
                        <a class="btn btn-lg btn-outline-dark rounded" href="/book-a-surveyor" >Go back</a>
                        <button class="btn btn-lg btn-primary rounded" type="submit">Continue</button>
                    </div>
                </div>
            </form>
            <div class="text-center pt-4">
                <p class="mt-8 text-sm text-secondary-500">If you need any assistance, please call us on <a href="tel:03301131133"><strong>07999474078</strong></a> during Mon to Fri, 9AM to 5PM.</p>
            </div>
        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center mt-4" >
        <a href="https://www.ricsfirms.com/office/220019/SurveyAll-Ltd" target="_blank">
            <img src="{{ asset('user-assets/assets/img/rics-logo.png')}}" height="80" alt="">
          </a>
          <a target="_blank" href="https://www.google.com/search?q=surveyall+ltd+google+reviews+&sxsrf=AB5stBidw4M7Ungm-pAXefhRYM_eeTpfMg%3A1689949204319&ei=FJS6ZPOLE5-chbIPzf2Z-AI&ved=0ahUKEwjz5Yuw_5-AAxUfTkEAHc1-Bi8Q4dUDCA8&uact=5&oq=surveyall+ltd+google+reviews+&gs_lp=Egxnd3Mtd2l6LXNlcnAiHXN1cnZleWFsbCBsdGQgZ29vZ2xlIHJldmlld3MgMgUQIRigATIFECEYoAEyBRAhGKABMgUQIRigAUiYRVAAWMwdcAF4AZABAJgB8QegAe4XqgEPMC40LjEuMC4xLjAuMS4xuAEDyAEA-AEB-AECwgIHECMYigUYJ8ICCxAuGK8BGMcBGIAEwgIKEAAYgAQYsQMYCsICBxAAGIAEGArCAgQQABgDwgILEC4YgAQYxwEYrwHCAhoQLhiABBjHARivARiXBRjcBBjeBBjgBNgBAcICBhAAGBYYHuIDBBgAIEGIBgG6BgYIARABGBQ&sclient=gws-wiz-serp#lrd=0x47d8a947b844d953:0x365be7222122ced3,1,,,,">
            <img src="{{ asset('img/logo/googlereview.svg')}}" class="img-responsive g-review ms-3" height="50" alt="">
          </a>
    </div>
</section>

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        $(document).ready(function() {
            $(".job-type-radio").on("change", function() {
                var selectedValue = $(this).val();
                $(".survey-type, .valuation-reason, .other-reason, .val-other-reason, #shared-ownership, #help-to-buy").hide();
                
                if (selectedValue === "RICS Home Survey") {
                    $(".survey-type").show(500);
                } else if (selectedValue === "RICS Home Valuation") {
                    $(".valuation-reason").show(500);
                } else if (selectedValue === "Other Service") {
                    $(".other-reason").show();
                }
            });

            $("#help").click(function(){
                $("#help-to-buy").show();
                $(".val-other-reason, #shared-ownership").hide();
            });

            $("#shared").click(function(){
                $("#shared-ownership").show();
                $("#help-to-buy, #val_other_reason, #other_service").hide();
            });
            
            $("#any-other-reason").click(function(){
                $("#val_other_reason").show();
                $("#help-to-buy, #shared-ownership, #other_service").hide();
            });
        });
    </script>
@endsection


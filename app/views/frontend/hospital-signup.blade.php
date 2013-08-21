@extends('frontEnd.layout.master')

@section('topcontent')

@stop

@section('content')
<div class="container" id="content">
    <div class="row">
<center>
	<div id="donorReg" style="z-index: 50;">
		<div class="formcanvas">
            <h3>Hospital details</h3>
			<form action="{{ route('hospitals.store') }}" method="POST">
			<p>
	       		<label for="name">Hospital name:</label>{{ $errors->first('name','<span class="field-error">:message</span>') }}
	       		<input type="text"  name="name" value="{{ Input::old('name') }}" />
	       	</p>

            <p>
                <label for="mobile">Mobile:</label>{{ $errors->first('mobile', '<span class="field-error">:message</span>') }}
                <input type="text" name="mobile" id="mobile" value="{{ Input::old('mobile')}}" />
            </p>

            <p>
                <label for="telephone">Telephone:</label>
                <input type="text" name="telephone" id="telephone" value="{{ Input::old('telephone')}}" />
            </p>

            <p>
                <label for="email">Email:</label>{{ $errors->first('email', '<span class="field-error">:message</span>') }}
                <input type="email" name="email" id="email" value="{{ Input::old('email')}}" />
            </p>

            <p>
                <label for="address">Address:</label>{{ $errors->first('address', '<span class="field-error">:message</span>') }}
                <textarea type="textarea" name="address" id="address" rows="5" value="{{ Input::old('address')}}" ></textarea>
            </p>

        	<p>
        		<label for="countrycode">Country:</label><br />
                <?php
                echo Form::select('countrycode', array(
                    '+46'	=> 'Sweden (+46)',
                    '+213' => 'Algeria (+213)',
                    '+244' => 'Angola (+244)',
                    '+267' => 'Botswana (+267)',
                    '+226' => 'Burkina Faso (+226)',
                    '+257' => 'Burundi (+257)',
                    '+237' => 'Cameroon (+237)',
                    '+238' => 'Cape Verde Islands (+238)',
                    '+236' => 'Central African Republic (+236)',
                    '+269' => 'Comoros (+269)',
                    '+242' => 'Congo (+242)',
                    '+253' => 'Djibouti (+253)',
                    '+593' => 'Ecuador (+593)',
                    '+20' => 'Egypt (+20)',
                    '+240' => 'Equatorial Guinea (+240)',
                    '+291' => 'Eritrea (+291)',
                    '+251' => 'Ethiopia (+251)',
                    '+241' => 'Gabon (+241)',
                    '+220' => 'Gambia (+220)',
                    '+233' => 'Ghana (+233)',
                    '+224' => 'Guinea (+224)',
                    '+245' => 'Guinea - Bissau (+245)',
                    '+225' => 'Ivory Coast (+225)',
                    '+254' => 'Kenya (+254)',
                    '+266' => 'Lesotho (+266)',
                    '+231' => 'Liberia (+231)',
                    '+218' => 'Libya (+218)',
                    '+261' => 'Madagascar (+261)',
                    '+265' => 'Malawi (+265)',
                    '+223' => 'Mali (+223)',
                    '+212' => 'Morocco (+212)',
                    '+258' => 'Mozambique (+258)',
                    '+264' => 'Namibia (+264)',
                    '+227' => 'Niger (+227)',
                    '+234' => 'Nigeria (+234)',
                    '+250' => 'Rwanda (+250)',
                    '+221' => 'Senegal (+221)',
                    '+232' => 'Sierra Leone (+232)',
                    '+252' => 'Somalia (+252)',
                    '+27' => 'South Africa (+27)',
                    '+249' => 'Sudan (+249)',
                    '+228' => 'Togo (+228)',
                    '+216' => 'Tunisia (+216)',
                    '+256' => 'Uganda (+256)',
                    '+243' => 'Zaire (+243)',
                    '+260' => 'Zambia (+260)',
                    '+263' => 'Zimbabwe (+263)'), Input::old('countrycode'));
                ?>
  			</p>

            <p>
                <label for="location">Location: <em>( Residential area )</em></label>{{ $errors->first('area', '<span class="field-error">:message</span>') }}
                <input type="text"  name="area" id="location" value="{{ Input::old('area')}}" />
                <input type="hidden" id="lat" name="lat" value="{{ Input::old('lat')}}" />
                <input type="hidden" id="lng" name="lng" value="{{ Input::old('lng')}}" />
            </p>

            <h3>Contact Person</h3>
            <p>
                <label for="fname">Fist name:</label>{{ $errors->first('fname','<span class="field-error">:message</span>') }}
                <input type="text"  name="fname" value="{{ Input::old('fname') }}" />
            </p>

            <p>
                <label for="lname">Last name:</label>{{ $errors->first('lname', '<span class="field-error">:message</span>') }}
                <input type="text" name="lname" id="lname" value="{{ Input::old('lname')}}" />
            </p>

            <p>
                <label for="gender">Gender:</label>{{ $errors->first('gender_id','<span class="field-error">:message</span>') }}
                {{ Form::select('gender_id', $genders, Input::old('gender_id')) }}
            </p>

            <p>
                <label for="contact-mobile">Mobile:</label>{{ $errors->first('contact-mobile', '<span class="field-error">:message</span>') }}
                <input type="text" name="contact-mobile" id="contact-mobile" value="{{ Input::old('contact-mobile')}}" />
            </p>
 
	        <p>
	        	<button type="submit" class="bigbtn" style="max-width:100%;">Register</button>
	        </p>
	        </form>
		</div>
	</div>
</center>
</div>
</div>
@stop
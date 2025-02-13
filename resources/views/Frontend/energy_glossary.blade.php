@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215029/Group_489_kgyihl.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h1>
                        Energy Glossary
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="Glossary">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <h1 class="text-center">Energy Glossary</h1>
                <p class="text-center">Discover the key terms and concepts that power the world of solar energy! Our Glossary provides clear, concise definitions to help you navigate everything solar</p>
            </div>
            <div class="col-lg-1"></div>


            <div class="search-bar d-flex">
                <input type="text" class="form-control shadow" placeholder="Enter keyword to search">
                <button class="btn shadow">Search</button>
            </div>

            <div class="glossary-section">
                <div class="glossary-letter">C</div>
                <div class="glossary-card">
                    <h5>Carbon Footprint</h5>
                    <p>The total amount of carbon dioxide and other greenhouse gas emissions for which an individual or organization is responsible, often expressed annually.</p>
                </div>
                <div class="glossary-card">
                    <h5>Climate Change</h5>
                    <p>Long-term alterations in temperature, precipitation, and other atmospheric patterns, largely influenced by human activities, especially the burning of fossil fuels.</p>
                </div>

                <div class="glossary-letter">E</div>
                <div class="glossary-card">
                    <h5>Electricity Tariff (Energy Charge Rate)</h5>
                    <p>The set, fixed price per kilowatt-hour that is locked in by your electricity provider or distribution company for an unspecified period. Subject to change based on prevailing economic factors.</p>
                </div>
                <div class="glossary-card">
                    <h5>ESS</h5>
                    <p>Emergency Storage System refers to batteries used to store energy in Solar Power Systems.</p>
                </div>
                <div class="glossary-letter">F</div>
                <div class="glossary-card">
                    <h5>Fixed Rate</h5>
                    <p>The prevailing electricity pricing structure where the rate per kWh remains constant for a specified contract length.</p>
                </div>
                <div class="glossary-letter">H</div>
                <div class="glossary-card">
                    <h5>HVAC</h5>
                    <p>Heating, Ventilation, and Air Conditioning systems that regulate indoor temperatures and air quality.</p>
                </div>
                <div class="glossary-letter">K</div>
                <div class="glossary-card">
                    <h5>Kilowatt (kW)</h5>
                    <p>A measure of electrical power equal to 1,000 watts, representing the rate of energy consumption or production.</p>
                </div>
                <div class="glossary-card">
                    <h5>Kilowatt-hour (kWh)</h5>
                    <p>A unit of energy equivalent to consuming 1 kilowatt of power for one hour, commonly used in electricity billing and battery ratings for solar systems.</p>
                </div>

                <div class="glossary-letter">O</div>
                <div class="glossary-card">
                    <h5>Off-peak</h5>
                    <p>Times when energy demand is lower, often during late nights or early mornings.</p>
                </div>
                <div class="glossary-card">
                    <h5>On-peak</h5>
                    <p>Times of high energy demand, typically during early evenings.</p>
                </div>
                <div class="glossary-card">
                    <h5>Off-Grid</h5>
                    <p>A power system that is not connected to the National Grid hence, entirely independent of supply from local utility companies or electricity suppliers meaning complete reliance on battery storage systems.</p>
                </div>
                <div class="glossary-card">
                    <h5>On-Grid</h5>
                    <p>A power system that is able to utilise power supply from the National Grid while also having it’s own source of power.</p>
                </div>
                <div class="glossary-letter">R</div>
                <div class="glossary-card">
                    <h5>Renewable Energy Certificate (REC)</h5>
                    <p>A certificate representing proof that one megawatt-hour (MWh) of electricity was generated from a renewable energy resource.</p>
                </div>
                <div class="glossary-letter">S</div>
                <div class="glossary-card">
                    <h5>Solar Energy</h5>
                    <p>Power derived from the sun’s rays, usually captured using photovoltaic cells or solar panels.</p>
                </div>
                <div class="glossary-card">
                    <h5>Solar Inverter</h5>
                    <p>Part of a Solar Energy System. It is a device that takes direct current (DC) from the Sun which is generated by a Solar Panel, and converts it to Alternating Current (AC) which goes into homes.</p>
                </div>
                <div class="glossary-card">
                    <h5>Solar Panel</h5>
                    <p>A device that converts sunlight energy into electricity using photovoltaic cells.</p>
                </div>
                <div class="glossary-letter">P</div>
                <div class="glossary-card">
                    <h5>Prepaid Meter (Smart Meter)</h5>
                    <p>An advanced meter that records electricity consumption in intervals and communicates this information to the utility for monitoring and billing.</p>
                </div>
                <div class="glossary-letter">T</div>
                <div class="glossary-card">
                    <h5>Transmission and Distribution Service Provider (TDSP): GENCO’s and DISCO’s.</h5>
                    <p>Entities responsible for maintaining and operating the infrastructure that transmits and distributes electricity to consumers. GENCOS are DOSCOs are</p>
                </div>

                <div class="glossary-letter">U</div>
                <div class="glossary-card">
                    <h5>Utility</h5>
                    <p>A company or entity that provides essential services, such as electricity, water, or gas, to consumers.</p>
                </div>

                <div class="glossary-letter">W</div>
                <div class="glossary-card">
                    <h5>Wind Energy</h5>
                    <p>Power derived from the kinetic energy of wind, typically harnessed using wind turbines. One of the forms of renewable energy: Solar, Wind, Hydrogen,</p>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
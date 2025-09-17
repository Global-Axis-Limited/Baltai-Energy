@extends('Layouts.connection')

@section('page-content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="flex flex-col ">
    <section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215035/Group_48097580_pzw4s2.png'); background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="text">
                                <h1>Enjoy Quality Time with your Family</h1>
                                <p>
                                    Easily access our Solar Financing options to power all your business operations
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215034/Group_480580_pn7hoa.png'); background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="text">

                                <h1>Your Journey to reliable Power Begins Here</h1>
                                <p>
                                    Easily access our Solar Financing options to power all your business operations
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215033/Group_4580_ockves.png'); background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="text">

                                <h1>Sign Up to the SSN Programme</h1>
                                <p>
                                    Easily access our Solar Financing options to power all your business operations
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215029/Group_489_kgyihl.png'); background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">

                                <h1>SSN Keeps the wheels of your Business Running</h1>
                                <p>
                                    Easily access our Solar Financing options to power all your business operations
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="loaderModal"
        class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center">
            <div class="animate-spin rounded-full h-12 w-12 border-4 border-orange-500 border-t-transparent mb-4"></div>
            <p class="text-gray-700 font-medium">Loading, please wait...</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col lg:flex-row items-center justify-center bg-gray-100">
        <!-- Left Side Design -->
        <div class="w-full max-w-md p-4">
            <div class="bg-white rounded-lg overflow-hidden ">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738589782/image_14_ohsawv.png"
                    draggable="false" alt="Solar Engineer" alt="Left Side Image" class="w-full h-74 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-orange-600">Solar Benefits</h3>
                    <p class="text-gray-600 mt-2">Explore how solar energy can save you money by harnessing the power of
                        the sun to reduce your electricity bills, promote sustainable living, and contribute to a
                        cleaner environment for future generations.</p>
                </div>
            </div>
        </div>
        <main class="flex-1 flex items-center justify-center p-6" style="padding:100px 0px;">
            <div class="w-full max-w-3xl bg-white rounded-md overflow-hidden ">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-[#F8861A] to-[#FEC31C] px-6 py-4">
                    <h2 class="text-xl font-bold text-white">Step <span id="stepNumber">1</span> of 5</h2>
                </div>

                <!-- Stepper Progress -->
                <div class="flex justify-between items-center px-8 py-6 step-indicator">
                    <div
                        class="indicator w-8 h-8 flex items-center justify-center rounded-full bg-orange-600 text-white font-bold">
                        1</div>
                    <div class="flex-1 h-1 bg-orange-400 mx-2"></div>
                    <div
                        class="indicator w-8 h-8 flex items-center justify-center rounded-full bg-gray-300 text-gray-600 font-bold">
                        2
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-2"></div>
                    <div
                        class="indicator w-8 h-8 flex items-center justify-center rounded-full bg-gray-300 text-gray-600 font-bold">
                        3
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-2"></div>
                    <div
                        class="indicator w-8 h-8 flex items-center justify-center rounded-full bg-gray-300 text-gray-600 font-bold">
                        4
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-2"></div>
                    <div
                        class="indicator w-8 h-8 flex items-center justify-center rounded-full bg-gray-300 text-gray-600 font-bold">
                        5
                    </div>
                </div>

                <!-- Step 1 -->
                <form class="p-8 space-y-6 step" id="step1">
                    <h1 class="text-2xl font-bold text-black">Let’s Calculate Your Savings</h1>
                    <h1 class="text-lg font-bold text-black mb-2">How many hours of power do you use from the public
                        grid each day?
                    </h1>
                    <p id="step1Note"
                        class="text-sm text-black flex items-center justify-between gap-2 mb-4 bg-white rounded-xl border border-[#CCCCCC] p-4">
                        <span class="flex items-center gap-2">
                            <span class="bg-orange-100 text-black rounded-full px-2 py-0.5 text-xs">i</span>
                            Understanding how many hours of light you get from the utility helps us understand your
                            current energy need.
                        </span>
                        <button type="button" onclick="document.getElementById('step1Note').style.display='none'"
                            class="text-orange-600 border p-2 border-[#CCCCCC] hover:text-red-600 rounded-full text-xs font-bold">X</button>
                    </p>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-black mb-3">Hours of Grid Power</label>
                            <input id="gridHours" placeholder="Enter your hours of grid power" type="number"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg">
                        </div>
                        <div>
                            <label class="block text-black mb-3">Last month’s utility bill (₦)</label>
                            <input id="utilityBill" placeholder="Enter your utility bill" type="number"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg">
                        </div>
                    </div>
                    <div>
                        <label class="block text-black mb-3">Business operating hours</label>
                        <div class="flex items-center gap-2">
                            <select id="businessFrom"
                                class="p-3 border border-[#CCCCCC] outline-none rounded-lg w-52 text-sm">
                                <option value="">From</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select id="businessFromPeriod"
                                class="p-3 border border-[#CCCCCC] outline-none rounded-lg w-52 text-sm">
                                <option>AM</option>
                                <option>PM</option>
                            </select>
                            <select id="businessTo"
                                class="p-3 border border-[#CCCCCC] outline-none rounded-lg w-52 text-sm">
                                <option value="">To</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select id="businessToPeriod"
                                class="p-3 border border-[#CCCCCC] outline-none rounded-lg w-52 text-sm">
                                <option>PM</option>
                                <option>AM</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-between pt-6">
                        <button type="button"
                            class="backBtn text-orange-600 font-medium flex items-center gap-1 hover:underline"
                            disabled>← Back</button>
                        <button type="button"
                            class="nextBtn bg-gradient-to-r from-[#F8861A] to-[#FEC31C] text-white px-8 py-2 rounded-md hover:opacity-90 transition">Next
                            →</button>
                    </div>
                </form>

                <!-- Step 2 -->
                <form class="p-8 space-y-6 step" id="step2" style="display:none;">
                    <h3 class="text-2xl font-bold text-gray-800">Do you own any of the following? <span
                            class="font-normal text-lg">(select all that apply)</span></h3>
                    <p id="sourceInfoNote"
                        class="text-sm text-black flex items-center justify-between gap-2 mb-4 bg-white rounded-xl border border-[#CCCCCC] p-4">
                        <span class="flex items-center gap-2">
                            <span class="bg-orange-100 text-black rounded-full px-2 py-0.5 text-xs">i</span>
                            Knowing your current source helps us calculate your savings.
                        </span>
                        <button type="button" onclick="document.getElementById('sourceInfoNote').style.display='none'"
                            class="text-orange-600 border p-2 border-[#CCCCCC] hover:text-red-600 rounded-full text-xs font-bold">X</button>
                    </p>
                    <div class="space-y-4">
                        <label
                            class="flex items-center justify-between p-4 border rounded-lg cursor-pointer hover:bg-orange-50">
                            <span class="text-gray-800 font-medium">Use of Petrol Generator</span>
                            <input id="petrolGenerator" type="checkbox" class="w-5 h-5 text-orange-600 rounded">
                        </label>
                        <label
                            class="flex items-center justify-between p-4 border rounded-lg cursor-pointer hover:bg-orange-50">
                            <span class="text-gray-800 font-medium">Use of Diesel Generator</span>
                            <input id="dieselGenerator" type="checkbox" class="w-5 h-5 text-orange-600 rounded">
                        </label>
                        <label
                            class="flex items-center justify-between p-4 border rounded-lg cursor-pointer hover:bg-orange-50">
                            <span class="text-gray-800 font-medium">Use of Inverter</span>
                            <input id="inverter" type="checkbox" class="w-5 h-5 text-orange-600 rounded">
                        </label>
                    </div>
                    <div class="flex justify-between pt-6">
                        <button type="button"
                            class="backBtn text-orange-600 font-medium flex items-center gap-1 hover:underline">←
                            Back</button>
                        <button type="button"
                            class="nextBtn bg-gradient-to-r from-[#F8861A] to-[#FEC31C] text-white px-8 py-2 rounded-md hover:opacity-90 transition">Next
                            →</button>
                    </div>
                </form>

                <!-- Step 3 -->
                <form class="p-8 space-y-6 step" id="step3" style="display:none;">
                    <h6 id="step3Selection" class="text-base font-bold text-gray-800"></h6>
                    <h1 class="text-2xl font-bold text-black mb-2">How much did you spend on power last week?</h1>
                    <p id="step3Note"
                        class="text-sm text-black flex items-center justify-between gap-2 mb-4 bg-white rounded-xl border border-[#CCCCCC] p-4">
                        <span class="flex items-center gap-2">
                            <span class="bg-orange-100 text-black rounded-full px-2 py-0.5 text-xs">i</span>
                            Understanding how much you spend helps us understand your current energy need to be exact!
                            All fields
                            required
                        </span>
                        <button type="button" onclick="document.getElementById('step3Note').style.display='none'"
                            class="text-orange-600 border p-2 border-[#CCCCCC] hover:text-red-600 rounded-full text-xs font-bold">X</button>
                    </p>
                    <div id="generatorInputs">
                        <!-- Dynamic inputs will be inserted here -->
                    </div>
                    <div class="flex justify-between pt-6">
                        <button type="button"
                            class="backBtn text-orange-600 font-medium flex items-center gap-1 hover:underline">←
                            Back</button>
                        <button type="button"
                            class="nextBtn bg-gradient-to-r from-[#F8861A] to-[#FEC31C] text-white px-8 py-2 rounded-md hover:opacity-90 transition">Next
                            →</button>
                    </div>
                </form>

                <!-- Step 4 -->
                <form class="p-8 space-y-6 step" id="step4" style="display:none;">
                    <h1 class="text-2xl font-bold text-black mb-2">How much money do you generate per month?</h1>
                    <p id="step4Note"
                        class="text-sm text-black flex items-center justify-between gap-2 mb-4 bg-white rounded-xl border border-[#CCCCCC] p-4">
                        <span class="flex items-center gap-2">
                            <span class="bg-orange-100 text-black rounded-full px-2 py-0.5 text-xs">i</span>
                            Based on your revenue or income, we'll find a financing plan that works with your budget
                        </span>
                        <button type="button" onclick="document.getElementById('step4Note').style.display='none'"
                            class="text-orange-600 border p-2 border-[#CCCCCC] hover:text-red-600 rounded-full text-xs font-bold">X</button>
                    </p>
                    <div class="mb-4">
                        <label class="block text-black mb-3">Monthly Revenue Average (₦):</label>
                        <input id="monthlyRevenue" type="number"
                            class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg">
                        <p class="text-sm text-black mt-3">* A rough estimate is fine for now. We'll verify this through
                            your bank
                            later.</p>
                    </div>
                    <div class="flex justify-between pt-6">
                        <button type="button"
                            class="backBtn text-orange-600 font-medium flex items-center gap-1 hover:underline">←
                            Back</button>
                        <button type="button"
                            class="skipBtn bg-gray-500 text-white px-8 py-2 rounded-md hover:bg-gray-600 transition">Skip</button>
                        <button type="button"
                            class="nextBtn bg-gradient-to-r from-[#F8861A] to-[#FEC31C] text-white px-8 py-2 rounded-md hover:opacity-90 transition">Next
                            →</button>
                    </div>
                </form>

                <!-- Step 5 -->
                <form class="p-8 space-y-6 step" id="step5" style="display:none;">
                    <div class="mb-8">
                        <h1 class="text-2xl font-bold text-black mb-2">Switch to Solar and Save Millions</h1>
                        <p class="text-black text-base mb-2">Baltai energy team member will contact you via phone or
                            email to provide
                            details on a free quote</p>
                        <p class="text-black text-sm">You could pay less than ₦934,390 in monthly installments.</p>
                    </div>
                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">First name:</label>
                            <input type="text" placeholder="John"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Last name:</label>
                            <input type="text" placeholder="Doe"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg" required>
                        </div>
                    </div>
                    <!-- Email and Phone -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Email address:</label>
                            <input type="email" placeholder="john@example.com"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Phone Number/WhatsApp Number</label>
                            <div class="flex">
                                <select class="px-3 py-3 border border-[#CCCCCC] outline-none rounded-l-lg bg-white"
                                    required>
                                    <option>NG +234</option>
                                </select>
                                <input type="tel" placeholder="Enter phone number"
                                    class="flex-1 px-4 py-3 border border-[#CCCCCC] outline-none border-l-0 rounded-r-lg"
                                    required>
                            </div>
                        </div>
                    </div>
                    <!-- Gender and Installation Site -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Gender:</label>
                            <div class="flex gap-4">
                                <label
                                    class="flex items-center px-4 py-3 border-2 border-orange-500 bg-orange-100 rounded-lg cursor-pointer">
                                    <input type="radio" name="gender" value="male" class="sr-only" required checked>
                                    <div
                                        class="w-4 h-4 border-2 border-orange-500 rounded-full bg-orange-500 flex items-center justify-center mr-3">
                                        <div class="w-2 h-2 bg-white rounded-full"></div>
                                    </div>
                                    <span class="text-gray-700 font-medium">Male</span>
                                </label>
                                <label
                                    class="flex items-center px-4 py-3 border-2 border-gray-300 bg-gray-100 rounded-lg cursor-pointer hover:border-orange-500">
                                    <input type="radio" name="gender" value="female" class="sr-only">
                                    <div class="w-4 h-4 border-2 border-gray-400 rounded-full mr-3"></div>
                                    <span class="text-gray-700 font-medium">Female</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Installation Site:</label>
                            <div class="flex gap-4">
                                <label
                                    class="flex items-center px-4 py-3 border-2 border-orange-500 bg-orange-100 rounded-lg cursor-pointer">
                                    <input type="radio" name="installation" value="business" class="sr-only" required
                                        checked>
                                    <div
                                        class="w-4 h-4 border-2 border-orange-500 rounded-full bg-orange-500 flex items-center justify-center mr-3">
                                        <div class="w-2 h-2 bg-white rounded-full"></div>
                                    </div>
                                    <span class="text-gray-700 font-medium">Business</span>
                                </label>
                                <label
                                    class="flex items-center px-4 py-3 border-2 border-gray-300 bg-gray-100 rounded-lg cursor-pointer hover:border-orange-500">
                                    <input type="radio" name="installation" value="household" class="sr-only">
                                    <div class="w-4 h-4 border-2 border-gray-400 rounded-full mr-3"></div>
                                    <span class="text-gray-700 font-medium">Household</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Business/Employer and Job Role -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Business/Employer Name:</label>
                            <input type="text" placeholder="Enter your business name or employer name"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Job Role:</label>
                            <input type="text" placeholder="Enter your job role"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg" required>
                        </div>
                    </div>
                    <!-- Industry and State -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Industry</label>
                            <select
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg appearance-none bg-white"
                                required>
                                <option value="">--Select Industry--</option>
                                <option value="Technology">Technology</option>
                                <option value="Finance">Finance</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Education">Education</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Retail">Retail</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">State</label>
                            <select id="stateSelect"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg"
                                onchange="populateLGAs()" required>
                                <option value="">Select a State</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="FCT">FCT</option>
                            </select>
                        </div>
                    </div>
                    <!-- LGA and City -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">LGA</label>
                            <select id="lgaSelect"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg" disabled
                                required>
                                <option value="">Select a State first</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">City</label>
                            <input type="text" placeholder="Lekki"
                                class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg" required>
                        </div>
                    </div>
                    <!-- Street Address -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Street Address:</label>
                        <input type="text" placeholder="7b, Plot 5"
                            class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg" required>
                    </div>
                    <!-- Buttons -->
                    <div class="flex justify-between pt-6">
                        <button type="button"
                            class="backBtn text-orange-600 font-medium flex items-center gap-1 hover:underline">←
                            Back</button>
                        <button type="button"
                            class="nextBtn bg-gradient-to-r from-[#F8861A] to-[#FEC31C] text-white px-8 py-2 rounded-md hover:opacity-90 transition">See
                            my options →</button>
                    </div>
                </form>

                <!-- Savings Modal -->
                <div id="savingsModal"
                    class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50"
                    style="display: none;">
                    <div class="bg-[#F8861A] p-6 rounded-lg w-[100%] sm:w-[500px] text-center">
                        <h2 class="text-2xl font-bold text-white mb-2">Baltai Energy could save you this much</h2>
                        <p class="text-white mb-4">By using reliable solar powered electricity instead of buying costly
                            fuel for your
                            generator</p>
                        <div class="bg-white p-4 rounded-lg mb-4">
                            <p class="text-2xl font-bold text-gray-800" id="savingsAmount">₦ </p>
                        </div>
                        <button id="continueBtn"
                            class="bg-gray-600 text-white px-6 py-2 rounded-md hover:bg-gray-700 transition">Continue</button>
                    </div>
                </div>
            </div>
        </main>
        <div class="w-full max-w-md p-4 flex flex-col items-center space-y-4">
            <img src="https://blog.baltaienergy.com/wp-content/uploads/2025/04/jackery-power-station-VXJx3B2Wpzg-unsplash-scaled.jpg"
                alt="Image 1" class="w-24 h-24 rounded-full object-cover">
            <img src="https://blog.baltaienergy.com/wp-content/uploads/2025/03/image2_hkepaj.jpg" alt="Image 2"
                class="w-64 h-64 rounded-full object-cover animate-pulse">
            <img src="https://blog.baltaienergy.com/wp-content/uploads/2025/04/beigners.avif" alt="Image 3"
                class="w-24 h-24 rounded-full object-cover">
        </div>
    </div>

    <section class="benefits-section py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-2">Benefits of Our Solar Solution Network</h2>
            <p class="text-center text-black mb-8">Save money, limit the environmental impact, and enjoy working with
                SolarTech & Co.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <div class="benefit-item p-4">
                    <div class="benefit-icon mx-auto mb-4 w-16 h-16">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_49_eeueia.png"
                            draggable="false" alt="">
                    </div>
                    <h5 class="text-lg font-semibold text-black mb-2">Cost Savings</h5>
                    <p class="text-white">Save up to 60% on energy bills.</p>
                </div>
                <div class="benefit-item p-4">
                    <div class="benefit-icon mx-auto mb-4 w-16 h-16">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_46_ei6h2o.png"
                            draggable="false" alt="">
                    </div>
                    <h5 class="text-lg font-semibold text-black mb-2">Easy Financing</h5>
                    <p class="text-white">Flexible payment plans to fit your budget.</p>
                </div>
                <div class="benefit-item p-4">
                    <div class="benefit-icon mx-auto mb-4 w-16 h-16">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_47_wh5pez.png"
                            draggable="false" alt="">
                    </div>
                    <h5 class="text-lg font-semibold text-black mb-2">Reliable Energy</h5>
                    <p class="text-white">24/7 uninterrupted power supply.</p>
                </div>
                <div class="benefit-item p-4">
                    <div class="benefit-icon mx-auto mb-4 w-16 h-16">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_487_doatlr.png"
                            draggable="false" alt="">
                    </div>
                    <h5 class="text-lg font-semibold text-black mb-2">Eco-Friendly</h5>
                    <p class="text-white">Reduce carbon emissions for a sustainable future.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="Justt">

    </section>
    <section class="Justt">

    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentStep = 1; // Start at step 1 on page reload
        const steps = document.querySelectorAll(".step");
        const indicators = document.querySelectorAll(".step-indicator .indicator");
        const loader = document.getElementById("loaderModal");
        const stepNumber = document.getElementById("stepNumber");
        const step3Selection = document.getElementById("step3Selection");
        const generatorInputs = document.getElementById("generatorInputs");
        const savingsModal = document.getElementById("savingsModal");
        const continueBtn = document.getElementById("continueBtn");
        const savingsAmount = document.getElementById("savingsAmount");

        let calculatedSavings = 0;

        window.lgaData = {
            "Abia": ["Aba North", "Aba South", "Arochukwu", "Bende", "Isiala Ngwa North",
                "Isiala Ngwa South", "Isuikwuato", "Obi Ngwa", "Ohafia", "Osisioma", "Ugwunagbo",
                "Ukwa East", "Ukwa West", "Umuahia North", "Umuahia South", "Umunneochi"
            ],
            "Adamawa": ["Fufure", "Ganye", "Gayuk", "Gombi", "Grie", "Hong", "Jada", "Lamurde", "Madagali",
                "Maiha", "Mayo-Belwa", "Michika", "Mubi North", "Mubi South", "Numan", "Shelleng",
                "Song", "Toungo", "Yola North", "Yola South"
            ],
            "Akwa Ibom": ["Abak", "Eastern Obolo", "Eket", "Esit Eket", "Essien Udim", "Etim Ekpo",
                "Etinan", "Ibeno", "Ibesikpo Asutan", "Ibiono Ibom", "Ika", "Ikono", "Ikot Abasi",
                "Ikot Ekpene", "Ini", "Itu", "Mbo", "Mkpat Enin", "Nsit Atai", "Nsit Ibom",
                "Nsit Ubium", "Obot Akara", "Okobo", "Onna", "Oron", "Oruk Anam", "Udung Uko",
                "Ukanafun", "Uruan", "Urue-Offong/Oruko", "Uyo"
            ],
            "Anambra": ["Aguata", "Anambra East", "Anambra West", "Anaocha", "Awka North", "Awka South",
                "Ayamelum", "Dunukofia", "Ekwusigo", "Idemili North", "Idemili South", "Ihiala",
                "Njikoka", "Nnewi North", "Nnewi South", "Ogbaru", "Onitsha North", "Onitsha South",
                "Orumba North", "Orumba South", "Oyi"
            ],
            "Bauchi": ["Alkaleri", "Bauchi", "Bogoro", "Damban", "Darazo", "Dass", "Ganjuwa", "Giade",
                "Jama'are", "Katagum", "Kirfi", "Misau", "Ningi", "Shira", "Tafawa Balewa", "Toro",
                "Warji", "Zaki"
            ],
            "Bayelsa": ["Brass", "Ekeremor", "Kolokuma/Opokuma", "Nembe", "Ogbia", "Sagbama",
                "Southern Ijaw", "Yenagoa"
            ],
            "Benue": ["Ador", "Agatu", "Apa", "Buruku", "Gboko", "Guma", "Gwer East", "Gwer West",
                "Katsina-Ala", "Konshisha", "Kwande", "Logo", "Makurdi", "Obi", "Ogbadibo", "Ohimini",
                "Oju", "Okpokwu", "Otukpo", "Tarka", "Ukum", "Ushongo", "Vandeikya"
            ],
            "Borno": ["Abadam", "Askira/Uba", "Bama", "Bayo", "Biu", "Chibok", "Damboa", "Dikwa", "Gubio",
                "Guzamala", "Gwoza", "Hawul", "Jere", "Kaga", "Kala/Balge", "Konduga", "Kukawa",
                "Kwaya Kusar", "Mafa", "Magumeri", "Maiduguri", "Marte", "Mobbar", "Monguno", "Ngala",
                "Nganzai", "Shani"
            ],
            "Cross River": ["Abi", "Akamkpa", "Akpabuyo", "Bakassi", "Bekwarra", "Biase", "Boki",
                "Calabar Municipal", "Calabar South", "Etung", "Ikom", "Obanliku", "Obudu", "Odukpani",
                "Ogoja", "Yakurr", "Yala"
            ],
            "Delta": ["Aniocha North", "Aniocha South", "Bomadi", "Burutu", "Ethiope East", "Ethiope West",
                "Ika North East", "Ika South", "Isoko North", "Isoko South", "Ndokwa East",
                "Ndokwa West", "Okpe", "Oshimili North", "Oshimili South", "Patani", "Sapele", "Udu",
                "Ughelli North", "Ughelli South", "Ukwuani", "Uvwie", "Warri North", "Warri South",
                "Warri South West"
            ],
            "Ebonyi": ["Abakaliki", "Afikpo North", "Afikpo South", "Ebonyi", "Ezza North", "Ezza South",
                "Ikwo", "Ishielu", "Ivo", "Izzi", "Ohaozara", "Ohaukwu", "Onicha"
            ],
            "Edo": ["Akoko-Edo", "Egor", "Esan Central", "Esan North-East", "Esan South-East", "Esan West",
                "Etsako Central", "Etsako East", "Etsako West", "Igueben", "Ikpoba Okha", "Oredo",
                "Orhionmwon", "Ovia North-East", "Ovia South-West", "Owan East", "Owan West",
                "Uhunmwonde"
            ],
            "Ekiti": ["Ado Ekiti", "Efon", "Ekiti East", "Ekiti South-West", "Ekiti West", "Emure",
                "Gbonyin", "Ido Osi", "Ijero", "Ikere", "Ikole", "Ilejemeje", "Irepodun/Ifelodun",
                "Ise/Orun", "Moba", "Oye"
            ],
            "Enugu": ["Aninri", "Awgu", "Enugu East", "Enugu North", "Enugu South", "Ezeagu", "Igbo Etiti",
                "Igbo Eze North", "Igbo Eze South", "Isi Uzo", "Nkanu East", "Nkanu West", "Nsukka",
                "Oji River", "Udenu", "Udi", "Uzo Uwani"
            ],
            "Gombe": ["Akko", "Balanga", "Billiri", "Dukku", "Funakaye", "Gombe", "Kaltungo", "Kwami",
                "Nafada", "Shongom", "Yamaltu/Deba"
            ],
            "Imo": ["Aboh Mbaise", "Ahiazu Mbaise", "Ehime Mbano", "Ezinihitte", "Ideato North",
                "Ideato South", "Ihitte/Uboma", "Ikeduru", "Isiala Mbano", "Isu", "Mbaitoli",
                "Ngor Okpala", "Njaba", "Nkwerre", "Obowo", "Oguta", "Ohaji/Egbema", "Okigwe", "Orlu",
                "Orsu", "Oru East", "Oru West", "Owerri Municipal", "Owerri North", "Owerri West"
            ],
            "Jigawa": ["Auyo", "Babura", "Biriniwa", "Birnin Kudu", "Buji", "Dutse", "Gagarawa", "Garki",
                "Gumel", "Guri", "Gwaram", "Gwiwa", "Hadejia", "Jahun", "Kafin Hausa", "Kaugama",
                "Kazaure", "Kiri Kasama", "Kiyawa", "Maigatari", "Malam Madori", "Miga", "Ringim",
                "Roni", "Sule Tankarkar", "Taura", "Yankwashi"
            ],
            "Kaduna": ["Birnin Gwari", "Chikun", "Giwa", "Igabi", "Ikara", "Jaba", "Jema'a", "Kachia",
                "Kaduna North", "Kaduna South", "Kagarko", "Kajuru", "Kaura", "Kauru", "Kubau", "Kudan",
                "Lere", "Makarfi", "Sabon Gari", "Sanga", "Soba", "Zangon Kataf", "Zaria"
            ],
            "Kano": ["Ajingi", "Albasu", "Bagwai", "Bebeji", "Bichi", "Bunkure", "Dala", "Dambatta",
                "Dawakin Kudu", "Dawakin Tofa", "Doguwa", "Fagge", "Gabasawa", "Garko", "Garun Mallam",
                "Gaya", "Gezawa", "Gwale", "Gwarzo", "Kabo", "Kano Municipal", "Karaye", "Kibiya",
                "Kiru", "Kumbotso", "Kunchi", "Kura", "Madobi", "Makoda", "Minjibir", "Nasarawa",
                "Rano", "Rimin Gado", "Rogo", "Shanono", "Sumaila", "Takai", "Tarauni", "Tofa",
                "Tsanyawa", "Tudun Wada", "Ungogo", "Warawa", "Wudil"
            ],
            "Katsina": ["Bakori", "Batagarawa", "Batsari", "Baure", "Bindawa", "Charanchi", "Dandume",
                "Danja", "Dan Musa", "Daura", "Dutsi", "Dutsin Ma", "Faskari", "Funtua", "Ingawa",
                "Jibia", "Kafur", "Kaita", "Kankara", "Kankia", "Katsina", "Kurfi", "Kusada",
                "Mai'Adua", "Malumfashi", "Mani", "Mashi", "Matsutsa", "Musawa", "Rimi", "Sabuwa",
                "Safana", "Sandamu", "Zango"
            ],
            "Kebbi": ["Aleiro", "Arewa Dandi", "Argungu", "Augie", "Bagudo", "Birnin Kebbi", "Bunza",
                "Dandi", "Fakai", "Gwandu", "Jega", "Kalgo", "Koko/Besse", "Maiyama", "Ngaski",
                "Sakaba", "Shanga", "Suru", "Wasagu/Danko", "Yauri", "Zuru"
            ],
            "Kogi": ["Adavi", "Ajaokuta", "Ankpa", "Bassa", "Dekina", "Ibaji", "Idah", "Igalamela-Odolu",
                "Ijumu", "Kabba/Bunu", "Kogi", "Lokoja", "Mopa-Muro", "Ofu", "Ogori/Magongo", "Okehi",
                "Okene", "Olamaboro", "Omala", "Yagba East", "Yagba West"
            ],
            "Kwara": ["Asa", "Baruten", "Edu", "Ekiti", "Ifelodun", "Ilorin East", "Ilorin South",
                "Ilorin West", "Irepodun", "Isin", "Kaiama", "Moro", "Offa", "Oke Ero", "Oyun", "Pategi"
            ],
            "Lagos": ["Agege", "Ajeromi-Ifelodun", "Alimosho", "Amuwo-Odofin", "Badagry", "Epe", "Eti-Osa",
                "Ibeju-Lekki", "Ifako-Ijaiye", "Ikeja", "Ikorodu", "Kosofe", "Lagos Island",
                "Lagos Mainland", "Mushin", "Ojo", "Oshodi-Isolo", "Shomolu", "Surulere"
            ],
            "Nasarawa": ["Akwanga", "Awe", "Doma", "Karu", "Keana", "Keffi", "Kokona", "Lafia", "Nasarawa",
                "Nasarawa Egon", "Obi", "Toto", "Wamba"
            ],
            "Niger": ["Agaie", "Agwara", "Bida", "Borgu", "Bosso", "Chanchaga", "Edati", "Gbako", "Gurara",
                "Katcha", "Kontagora", "Lapai", "Lavun", "Magama", "Mariga", "Mashegu", "Mokwa", "Muya",
                "Pailoro", "Rafi", "Rijau", "Shiroro", "Suleja", "Tafa", "Wushishi"
            ],
            "Ogun": ["Abeokuta North", "Abeokuta South", "Ado-Odo/Ota", "Egbado North", "Egbado South",
                "Ewekoro", "Ifo", "Ijebu East", "Ijebu North", "Ijebu North East", "Ijebu Ode",
                "Ikenne", "Imeko Afon", "Ipokia", "Obafemi Owode", "Odeda", "Odogbolu",
                "Ogun Waterside", "Remo North", "Shagamu"
            ],
            "Ondo": ["Akoko North-East", "Akoko North-West", "Akoko South-East", "Akoko South-West",
                "Akure North", "Akure South", "Ese Odo", "Idanre", "Ifedore", "Ilaje",
                "Ile Oluji/Okeigbo", "Irele", "Odigbo", "Okitipupa", "Ondo East", "Ondo West", "Ose",
                "Owo"
            ],
            "Osun": ["Aiyedaade", "Aiyedire", "Atakunmosa East", "Atakunmosa West", "Boluwaduro", "Boripe",
                "Ede North", "Ede South", "Egbedore", "Ejigbo", "Ife Central", "Ife East", "Ife North",
                "Ife South", "Ifedayo", "Ifelodun", "Ila", "Ilesha East", "Ilesha West", "Irepodun",
                "Irewole", "Isokan", "Iwo", "Obokun", "Odo Otin", "Ola Oluwa", "Olorunda", "Oriade",
                "Orolu", "Osogbo"
            ],
            "Oyo": ["Afijio", "Akinyele", "Atiba", "Atisbo", "Egbeda", "Ibadan North", "Ibadan North East",
                "Ibadan North West", "Ibadan South East", "Ibadan South West", "Ibarapa Central",
                "Ibarapa East", "Ibarapa North", "Ido", "Irepo", "Iseyin", "Itesiwaju", "Iwajowa",
                "Kajola", "Lagelu", "Ogbomosho North", "Ogbomosho South", "Ogo Oluwa", "Olorunsogo",
                "Oluyole", "Ona Ara", "Orelope", "Ori Ire", "Oyo East", "Oyo West", "Saki East",
                "Saki West", "Surulere"
            ],
            "Plateau": ["Barkin Ladi", "Bassa", "Bokkos", "Jos East", "Jos North", "Jos South", "Kanam",
                "Kanke", "Langtang North", "Langtang South", "Mangu", "Mikang", "Pankshin",
                "Qua'an Pan", "Riyom", "Shendam", "Wase"
            ],
            "Rivers": ["Abua/Odual", "Ahoada East", "Ahoada West", "Akuku-Toru", "Andoni", "Asari-Toru",
                "Bonny", "Degema", "Eleme", "Emohua", "Etche", "Gokana", "Ikwerre", "Khana",
                "Obio/Akpor", "Ogba/Egbema/Ndoni", "Ogu/Bolo", "Okrika", "Omuma", "Opobo/Nkoro",
                "Oyigbo", "Port Harcourt", "Tai"
            ],
            "Sokoto": ["Binji", "Bodinga", "Dange Shuni", "Gada", "Goronyo", "Gudu", "Gwadabawa", "Illela",
                "Isa", "Kebbe", "Kware", "Rabah", "Sabon Birni", "Shagari", "Silame", "Sokoto North",
                "Sokoto South", "Tambuwal", "Tangaza", "Tureta", "Wamako", "Wurno", "Yabo"
            ],
            "Taraba": ["Ardo Kola", "Bali", "Donga", "Gashaka", "Ibi", "Jalingo", "Karim Lamido", "Kurmi",
                "Lau", "Sardauna", "Takum", "Ussa", "Wukari", "Yorro", "Zing"
            ],
            "Yobe": ["Bade", "Bursari", "Damaturu", "Fika", "Fune", "Geidam", "Gujba", "Gulani", "Jakusko",
                "Karasuwa", "Machina", "Nangere", "Nguru", "Potiskum", "Tarmuwa", "Yunusari", "Yusufari"
            ],
            "Zamfara": ["Anka", "Bakura", "Birnin Magaji/Kiyaw", "Bukkuyum", "Bungudu", "Gummi", "Gusau",
                "Kaura Namoda", "Maradun", "Maru", "Shinkafi", "Talata Mafara", "Chafe", "Zurmi"
            ],
            "FCT": ["Abaji", "Bwari", "Gwagwalada", "Kuje", "Kwali", "Municipal Area Council"]
        };

        window.populateLGAs = function() {
            const stateSelect = document.getElementById("stateSelect");
            const lgaSelect = document.getElementById("lgaSelect");
            const selectedState = stateSelect.value;

            lgaSelect.innerHTML = "<option value=''>Select an LGA</option>";
            lgaSelect.disabled = true;

            if (selectedState && window.lgaData[selectedState]) {
                lgaSelect.innerHTML = "<option value=''>Select an LGA</option>"; // Reset options
                window.lgaData[selectedState].forEach(lga => {
                    const option = document.createElement("option");
                    option.value = lga;
                    option.textContent = lga;
                    lgaSelect.appendChild(option);
                });
                lgaSelect.disabled = false;
            }
        };

        function updateStep3Inputs() {
            const petrolChecked = document.getElementById("petrolGenerator").checked;
            const dieselChecked = document.getElementById("dieselGenerator").checked;
            const inverterChecked = document.getElementById("inverter").checked;
            generatorInputs.innerHTML = "";

            if (petrolChecked || dieselChecked || inverterChecked) {
                if (petrolChecked) {
                    generatorInputs.innerHTML += `
          <div>
            <label class="block text-black mb-3">Daily hours of petrol generator usage:</label>
            <input id="dailyUsagePetrol" type="number" placeholder="e.g. 6" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
          </div>
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label class="block text-black mb-3">Weekly liters of petrol (L):</label>
              <input id="weeklyLitersPetrol" type="number" placeholder="e.g. 40" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
            </div>
            <div>
              <label class="block text-black mb-3">Weekly amount spent on petrol (₦):</label>
              <input id="weeklyCostPetrol" type="number" placeholder="e.g. 5000" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
            </div>
          </div>
          <div>
            <label class="block text-black mb-3">Size of petrol generator (kVA):</label>
            <input id="generatorSizePetrol" type="number" placeholder="e.g. 2.5" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
          </div>
        `;
                }
                if (dieselChecked) {
                    generatorInputs.innerHTML += `
          <div>
            <label class="block text-black mb-3">Daily hours of diesel generator usage:</label>
            <input id="dailyUsageDiesel" type="number" placeholder="e.g. 6" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
          </div>
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label class="block text-black mb-3">Weekly liters of diesel (L):</label>
              <input id="weeklyLitersDiesel" type="number" placeholder="e.g. 40" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
            </div>
            <div>
              <label class="block text-black mb-3">Weekly amount spent on diesel (₦):</label>
              <input id="weeklyCostDiesel" type="number" placeholder="e.g. 5000" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
            </div>
          </div>
          <div>
            <label class="block text-black mb-3">Size of diesel generator (kVA):</label>
            <input id="generatorSizeDiesel" type="number" placeholder="e.g. 2.5" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
          </div>
        `;
                }
                if (inverterChecked) {
                    generatorInputs.innerHTML += `
          <div>
            <label class="block text-black mb-3">Daily hours of inverter usage:</label>
            <input id="dailyUsageInverter" type="number" placeholder="e.g. 6" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
          </div>
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label class="block text-black mb-3">Weekly amount spent on inverter (₦):</label>
              <input id="weeklyCostInverter" type="number" placeholder="e.g. 5000" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
            </div>
            <div>
              <label class="block text-black mb-3">Size of inverter (kVA):</label>
              <input id="generatorSizeInverter" type="number" placeholder="e.g. 2.5" class="w-full text-sm p-3 border border-[#CCCCCC] outline-none rounded-lg mb-4">
            </div>
          </div>
        `;
                }
            } else {
                generatorInputs.innerHTML =
                    "<p class='text-red-500'>Please select a generator type or inverter in Step 2.</p>";
            }
        }

        function calculateSavings() {
            const utilityBill = parseFloat(document.getElementById("utilityBill")?.value) || 0;
            const weeklyCostPetrol = parseFloat(document.getElementById("weeklyCostPetrol")?.value) || 0;
            const weeklyCostDiesel = parseFloat(document.getElementById("weeklyCostDiesel")?.value) || 0;
            const weeklyCostInverter = parseFloat(document.getElementById("weeklyCostInverter")?.value) || 0;
            const dailyUsagePetrol = parseFloat(document.getElementById("dailyUsagePetrol")?.value) || 0;
            const dailyUsageDiesel = parseFloat(document.getElementById("dailyUsageDiesel")?.value) || 0;
            const dailyUsageInverter = parseFloat(document.getElementById("dailyUsageInverter")?.value) || 0;
            const generatorSizePetrol = parseFloat(document.getElementById("generatorSizePetrol")?.value) || 0;
            const generatorSizeDiesel = parseFloat(document.getElementById("generatorSizeDiesel")?.value) || 0;
            const generatorSizeInverter = parseFloat(document.getElementById("generatorSizeInverter")?.value) ||
                0;

            let baseSavings = (utilityBill * 12) + (weeklyCostPetrol * 52) + (weeklyCostDiesel * 52) + (
                weeklyCostInverter * 52);
            let usageSavings = ((dailyUsagePetrol * generatorSizePetrol) + (dailyUsageDiesel *
                generatorSizeDiesel) + (dailyUsageInverter * generatorSizeInverter)) * 1500;
            calculatedSavings = baseSavings + usageSavings;

            if (calculatedSavings < 15000000) {
                calculatedSavings = 15000000 + (calculatedSavings * 2);
            }

            return calculatedSavings;
        }

        function showStep(step) {
            steps.forEach((s, i) => s.style.display = (i + 1 === step) ? "block" : "none");
            indicators.forEach((ind, i) => {
                ind.classList.toggle("bg-orange-600", i + 1 <= step);
                ind.classList.toggle("text-white", i + 1 <= step);
                ind.classList.toggle("bg-gray-300", i + 1 > step);
                ind.classList.toggle("text-gray-600", i + 1 > step);
            });
            stepNumber.textContent = step;
            currentStep = step;

            if (step === 3) {
                updateStep3Inputs();
                const petrolChecked = document.getElementById("petrolGenerator").checked;
                const dieselChecked = document.getElementById("dieselGenerator").checked;
                const inverterChecked = document.getElementById("inverter").checked;
                if (petrolChecked && !dieselChecked && !inverterChecked) {
                    step3Selection.textContent = "You selected petrol generator";
                } else if (!petrolChecked && dieselChecked && !inverterChecked) {
                    step3Selection.textContent = "You selected diesel generator";
                } else if (!petrolChecked && !dieselChecked && inverterChecked) {
                    step3Selection.textContent = "You selected inverter";
                } else if (petrolChecked && dieselChecked && !inverterChecked) {
                    step3Selection.textContent = "You selected petrol and diesel generator";
                } else if (petrolChecked && !dieselChecked && inverterChecked) {
                    step3Selection.textContent = "You selected petrol generator and inverter";
                } else if (!petrolChecked && dieselChecked && inverterChecked) {
                    step3Selection.textContent = "You selected diesel generator and inverter";
                } else if (petrolChecked && dieselChecked && inverterChecked) {
                    step3Selection.textContent = "You selected petrol, diesel generator, and inverter";
                } else {
                    step3Selection.textContent = "Please select a generator type or inverter";
                }
            }
            if (step === 5) {
                // Ensure LGA dropdown is initialized when step 5 is shown
                populateLGAs();
            }
        }

        function validateStep(step) {
            if (step === 1) {
                const gridHours = document.getElementById("gridHours").value.trim();
                const utilityBill = document.getElementById("utilityBill").value.trim();
                const from = document.getElementById("businessFrom").value.trim();
                const fromPeriod = document.getElementById("businessFromPeriod").value;
                const to = document.getElementById("businessTo").value.trim();
                const toPeriod = document.getElementById("businessToPeriod").value;
                if (!gridHours || !utilityBill || !from || !fromPeriod || !to || !toPeriod) {
                    alert("⚠️ Please fill out all required fields, including Business Hours.");
                    return false;
                }
            }
            if (step === 2) {
                const petrol = document.getElementById("petrolGenerator").checked;
                const diesel = document.getElementById("dieselGenerator").checked;
                const inverter = document.getElementById("inverter").checked;
                if (!petrol && !diesel && !inverter) {
                    alert("⚠️ Please select at least one power source option.");
                    return false;
                }
            }
            if (step === 3) {
                const petrolChecked = document.getElementById("petrolGenerator").checked;
                const dieselChecked = document.getElementById("dieselGenerator").checked;
                const inverterChecked = document.getElementById("inverter").checked;
                if (petrolChecked) {
                    const dailyUsagePetrol = document.getElementById("dailyUsagePetrol")?.value.trim();
                    const weeklyLitersPetrol = document.getElementById("weeklyLitersPetrol")?.value.trim();
                    const weeklyCostPetrol = document.getElementById("weeklyCostPetrol")?.value.trim();
                    const generatorSizePetrol = document.getElementById("generatorSizePetrol")?.value.trim();
                    if (!dailyUsagePetrol || !weeklyLitersPetrol || !weeklyCostPetrol || !generatorSizePetrol) {
                        alert("⚠️ Please fill out all required fields for petrol generator.");
                        return false;
                    }
                }
                if (dieselChecked) {
                    const dailyUsageDiesel = document.getElementById("dailyUsageDiesel")?.value.trim();
                    const weeklyLitersDiesel = document.getElementById("weeklyLitersDiesel")?.value.trim();
                    const weeklyCostDiesel = document.getElementById("weeklyCostDiesel")?.value.trim();
                    const generatorSizeDiesel = document.getElementById("generatorSizeDiesel")?.value.trim();
                    if (!dailyUsageDiesel || !weeklyLitersDiesel || !weeklyCostDiesel || !generatorSizeDiesel) {
                        alert("⚠️ Please fill out all required fields for diesel generator.");
                        return false;
                    }
                }
                if (inverterChecked) {
                    const dailyUsageInverter = document.getElementById("dailyUsageInverter")?.value.trim();
                    const weeklyCostInverter = document.getElementById("weeklyCostInverter")?.value.trim();
                    const generatorSizeInverter = document.getElementById("generatorSizeInverter")?.value
                        .trim();
                    if (!dailyUsageInverter || !weeklyCostInverter || !generatorSizeInverter) {
                        alert("⚠️ Please fill out all required fields for inverter.");
                        return false;
                    }
                }
            }
            if (step === 4) {
                const monthlyRevenue = document.getElementById("monthlyRevenue").value.trim();
                if (!monthlyRevenue) {
                    alert("⚠️ Please input Monthly Revenue Average.");
                    return false;
                }
            }
            if (step === 5) {
                const firstName = document.querySelector('#step5 input[type="text"]:nth-child(2)').value.trim();
                const lastName = document.querySelector('#step5 input[type="text"]:nth-child(5)').value.trim();
                const email = document.querySelector('#step5 input[type="email"]').value.trim();
                const phone = document.querySelector('#step5 input[type="tel"]').value.trim();
                const gender = document.querySelector('input[name="gender"]:checked');
                const installation = document.querySelector('input[name="installation"]:checked');
                const businessName = document.querySelector('#step5 input[type="text"]:nth-child(11)').value
                    .trim();
                const jobRole = document.querySelector('#step5 input[type="text"]:nth-child(14)').value.trim();
                const industry = document.querySelector('#step5 select:nth-child(17)').value;
                const state = document.getElementById("stateSelect").value;
                const lga = document.getElementById("lgaSelect").value;
                const city = document.querySelector('#step5 input[type="text"]:nth-child(23)').value.trim();
                const street = document.querySelector('#step5 input[type="text"]:nth-child(26)').value.trim();

                if (!firstName || !lastName || !email || !phone || !gender || !installation || !businessName ||
                    !jobRole || !industry || !state || !lga || !city || !street) {
                    alert("⚠️ Please fill out all required fields.");
                    return false;
                }
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    alert("⚠️ Please enter a valid email address.");
                    return false;
                }
                if (!/^\d{10}$/.test(phone.replace(/\D/g, ''))) {
                    alert("⚠️ Please enter a valid 10-digit phone number.");
                    return false;
                }
            }
            return true;
        }

        function showLoaderAndNext(nextStep) {
            loader.classList.remove("hidden");
            setTimeout(() => {
                loader.classList.add("hidden");
                showStep(nextStep);
                if (nextStep === 4) {
                    savingsModal.style.display = "flex";
                    calculatedSavings = calculateSavings();
                    savingsAmount.textContent = `₦ ${calculatedSavings.toLocaleString()}`;
                }
            }, 1000); // fake delay (1s)
        }

        continueBtn.addEventListener("click", () => {
            savingsModal.style.display = "none";
        });

        document.querySelectorAll(".nextBtn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (validateStep(currentStep)) {
                    showLoaderAndNext(currentStep + 1);
                }
            });
        });

        document.querySelectorAll(".backBtn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (currentStep > 1) {
                    showStep(currentStep - 1);
                }
            });
        });

        document.querySelectorAll(".skipBtn").forEach(btn => {
            btn.addEventListener("click", () => {
                showLoaderAndNext(5); // Show step 5
            });
        });

        showStep(1); // Start at step 1 on page reload
    });
    </script>
    <script>
    // Handle radio button styling
    document.querySelectorAll('input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', function() {
            // Reset all labels in the same group
            const name = this.name;
            document.querySelectorAll(`input[name="${name}"]`).forEach(r => {
                const label = r.closest('label');
                const circle = label.querySelector('div');
                if (r === this) {
                    label.className =
                        'flex items-center px-4 py-3 border-2 border-orange-500 bg-orange-100 rounded-lg cursor-pointer';
                    circle.className =
                        'w-4 h-4 border-2 border-orange-500 rounded-full bg-orange-500 flex items-center justify-center mr-3';
                    circle.innerHTML = '<div class="w-2 h-2 bg-white rounded-full"></div>';
                } else {
                    label.className =
                        'flex items-center px-4 py-3 border-2 border-gray-300 bg-gray-100 rounded-lg cursor-pointer hover:border-orange-500';
                    circle.className = 'w-4 h-4 border-2 border-gray-400 rounded-full mr-3';
                    circle.innerHTML = '';
                }
            });
        });
    });
    </script>

</body>

</html>
@endsection
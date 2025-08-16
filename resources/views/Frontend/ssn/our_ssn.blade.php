@extends('Layouts.connection')
@section('page-content')
<!-- Beadcrum -->
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

<!-- Beadcrum Ends -->
<section class="energy-section">
  <div class="container">
    <div class="row">
    <div class="col-md-6">
  <div class="energy-form" data-aos="zoom-out-right">
    <div class="step-indicator mb-4">
      <div class="indicator active"></div>
      <div class="indicator"></div>
      <div class="indicator"></div>
      <div class="indicator"></div>
    </div>

    <h3 class="fw-bold text-black text-anime-wave mb-2">Let’s Calculate Your Savings!</h3>
    <h5 class="text-black mb-4">Estimate Your Potential Solar Savings</h5>
    <!-- Step 1 -->
    <div class="step step-1">
      <h6 class="mb-4">How many hours of power do you use from the public grid each day?</h6>
      <div class="info-box">
        <span class="text-muted">Understanding how many hours of light you get from the utility helps us understand your current energy need.</span>
      </div>
      <form id="gridForm">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="gridHours" class="form-label mb-2">Hours of Grid Power</label>
            <input type="number" class="form-control mb-3" id="gridHours" placeholder="Enter hours" required>
          </div>
          <div class="col-md-6">
            <label for="utilityBill" class="form-label mb-2">Last month's utility bill (₦)</label>
            <input type="number" class="form-control mb-3" id="utilityBill" placeholder="Enter amount" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="businessFrom" class="form-label mb-2">Business operating hours</label>
            <div class="input-group">
              <select class="form-select" id="businessFrom" required>
                <option value="">From</option>
                <option>1</option><option>2</option><option>3</option>
                <option>4</option><option>5</option><option>6</option>
                <option>7</option><option>8</option><option>9</option>
                <option>10</option><option>11</option><option>12</option>
              </select>
              <select class="form-select" id="businessFromPeriod" required>
              <option value="AM">AM</option>
        <option value="PM">PM</option>

              </select>
            </div>
          </div>

          <div class="col-md-6">
            <label for="businessTo" class="form-label mb-2">To</label>
            <div class="input-group">
              <select class="form-select" id="businessTo" required>
                <option value="">To</option>
                <option>1</option><option>2</option><option>3</option>
                <option>4</option><option>5</option><option>6</option>
                <option>7</option><option>8</option><option>9</option>
                <option>10</option><option>11</option><option>12</option>
              </select>
              <select class="form-select" id="businessToPeriod" required>
              <option value="AM">AM</option>
        <option value="PM">PM</option>

              </select>
            </div>
          </div>
        </div>

        <button type="button" class="btn-advance nextBtn">Next</button>
      </form>
    </div>

    <!-- Step 2 -->
    <div class="step step-2" style="display:none;">
      <h6 class="mb-4">Do you own any of the following? (select all that apply)</h6>
      <div class="info-box">
        <span class="text-muted">Knowing your current source helps us calculate your savings.</span>
      </div>
      <form id="sourceForm">
        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" value="petrol" id="petrolGenerator">
          <label class="form-check-label" for="petrolGenerator">Use of Petrol Generator</label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" value="diesel" id="dieselGenerator">
          <label class="form-check-label" for="dieselGenerator">Use of Diesel Generator</label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" value="inverter" id="inverter">
          <label class="form-check-label" for="inverter">Use of Inverter</label>
        </div>
        <button type="button" class="btn-return backBtn mt-3">Back</button>
        <button type="button" class="btn-advance nextBtn mt-3">Next</button>
      </form>
    </div>

    <!-- Step 3 -->
    <div class="step step-3" style="display:none;">
      <h6 class="mb-4">How much did you spend on power last week?</h6>
      <div class="info-box">
        <span class="text-muted">Understanding how much you spend helps us understand your current energy need.</span>
      </div>
      <form id="petrolForm">
        <div class="mb-3">
          <label for="generatorHours" class="form-label">Daily hours of generator usage:</label>
          <input type="number" class="form-control mb-3" id="generatorHours" placeholder="Enter hours" required>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="petrolLiters" class="form-label">Weekly liters of petrol (L):</label>
            <input type="number" class="form-control mb-3" id="petrolLiters" placeholder="Enter liters" required>
          </div>
          <div class="col-md-6">
            <label for="petrolCost" class="form-label">Weekly amount spent (₦):</label>
            <input type="number" class="form-control mb-8" id="petrolCost" placeholder="Enter amount" required>
          </div>
        </div>
       
        <button type="button" class="btn-return backBtn">Back</button>
        <button type="button" class="btn-advance nextBtn">Next</button>
      </form>
    </div>

    <!-- Step 4 -->
    <div class="step step-4" style="display:none;">
      <h6 class="mb-4">How much money do you generate per month?</h6>
      <div class="info-box">
        <span class="text-muted">Based on your revenue or income, we'll find a financing plan that works with your budget.</span>
      </div>
      <form id="revenueForm">
        <div class="mb-3">
          <label for="monthlyRevenue" class="form-label">Monthly Revenue Average (₦):</label>
          <input type="number" class="form-control mb-3" id="monthlyRevenue" placeholder="Enter amount" required>
        </div>
        <button type="button" class="btn-return backBtn">Back</button>
        <button type="button" class="btn-advance" id="showSavingsBtn">See Savings</button>
      </form>
    </div>
  </div>
</div>
      <!-- Right: Images -->
      <div class="col-md-6">
        <div class="d-flex flex-column gap-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738589782/image_14_ohsawv.png" draggable="false" alt="Solar Engineer" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="benefits-section">
  <div class="container">
    <h2>Benefits of Our Solar Solution Network</h2>
    <p>Save money, limit the environmental impact, and enjoy working with SolarTech & Co.</p>
    <div class="row text-center mt-4">
      <div class="col-md-3">
        <div class="benefit-item">
          <div class="benefit-icon">
            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_49_eeueia.png" draggable="false" alt="">
          </div>
          <h5>Cost Savings</h5>
          <p>Save up to 60% on energy bills.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="benefit-item">
          <div class="benefit-icon"><img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_46_ei6h2o.png" draggable="false" alt=""></div>
          <h5>Easy Financing</h5>
          <p>Flexible payment plans to fit your budget.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="benefit-item">
          <div class="benefit-icon"><img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_47_wh5pez.png" draggable="false" alt=""></div>
          <h5>Reliable Energy</h5>
          <p>24/7 uninterrupted power supply.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="benefit-item">
          <div class="benefit-icon"><img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_487_doatlr.png" draggable="false" alt=""></div>
          <h5>Eco-Friendly</h5>
          <p>Reduce carbon emissions for a sustainable future.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="Form">
  <div class="container">
    <iframe aria-label='Solar Solution Network' frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.com/baltaienergyltd1/form/ApplyforSSN/formperma/hV99W39w6FFq_Jr8tuH0WwUqAQx3sq9XYgojDzCEObI'></iframe>
  </div>
</section>
<section class="Justt">

</section>

<!-- Bootstrap Modal -->
<div class="modal fade" id="savingsModal" tabindex="-1" aria-labelledby="savingsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
      
      <!-- Header -->
      <div class="modal-header border-0 bg-light">
        <h5 class="modal-title fw-bold text-dark" id="savingsModalLabel">
          🌞 Your Estimated Savings
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body text-center p-4">
        <h2 id="savingsAmount" class="fw-bold mb-3" style="color:#1a3c2e; font-size:2rem;">
          ₦ 0
        </h2>
        <p class="text-muted">
          By switching to <span class="fw-semibold text-success">reliable solar</span>, 
          you can save more compared to costly fuel.
        </p>
      </div>

      <!-- Footer -->
      <div class="modal-footer border-0 justify-content-center bg-light">
        <button type="button" class="btn btn-success px-4 py-2 rounded-pill shadow-sm" data-bs-dismiss="modal">
          Continue
        </button>
      </div>
    </div>
  </div>
</div>

@endsection


<script>
document.addEventListener("DOMContentLoaded", function() {
  let currentStep = 1;
  const steps = document.querySelectorAll(".step");
  const indicators = document.querySelectorAll(".step-indicator .indicator");

  function showStep(step) {
    steps.forEach((s, i) => {
      s.style.display = (i + 1 === step) ? "block" : "none";
    });
    indicators.forEach((ind, i) => {
      ind.classList.toggle("active", i + 1 === step);
    });
    currentStep = step;
  }

  function validateStep(step) {
    if (step === 1) {
      const gridHours = document.getElementById("gridHours").value.trim();
      const utilityBill = document.getElementById("utilityBill").value.trim();
      const from = document.getElementById("businessFrom").value;
      const fromPeriod = document.getElementById("businessFromPeriod").value;
      const to = document.getElementById("businessTo").value;
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
      const genHours = document.getElementById("generatorHours").value.trim();
      const petrolLiters = document.getElementById("petrolLiters").value.trim();
      const petrolCost = document.getElementById("petrolCost").value.trim();
      if (!genHours || !petrolLiters || !petrolCost) {
        alert("⚠️ Please fill out all generator usage fields.");
        return false;
      }
    }
    if (step === 4) {
      const monthlyRevenue = document.getElementById("monthlyRevenue").value.trim();
      if (!monthlyRevenue) {
        alert("⚠️ Please enter your monthly revenue.");
        return false;
      }
    }
    return true;
  }

  document.querySelectorAll(".nextBtn").forEach(btn => {
    btn.addEventListener("click", () => {
      if (validateStep(currentStep)) {
        showStep(currentStep + 1);
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

  document.getElementById("showSavingsBtn").addEventListener("click", () => {
    if (validateStep(4)) {
      const revenue = parseFloat(document.getElementById("monthlyRevenue").value) || 0;
      const savings = revenue * 0.35; // example 35% savings
      document.getElementById("savingsAmount").innerText = "₦ " + savings.toLocaleString();
      new bootstrap.Modal(document.getElementById("savingsModal")).show();
    }
  });

  showStep(1);
});
</script>


<style>
  .energy-section {
      padding: 80 0px;
    
    }
  .btn-advance {
    background-color: #F8861A;
    border-color: #F8861A;
    padding: 12px 25px;
    border-radius: 5px;
    color: white;
    font-size: 14px;
    transition: all 0.3s ease;
    border: none !important;
  }

  .btn-advance:hover {
    background-color: #d66f15;
    transform: translateY(-2px);

  }

  .btn-return {
    background-color: #1a3c2e;
    border-color: #1a3c2e;
    color: white;
    border: none !important;
    padding: 11px 25px;
    border-radius: 5px;
    transition: all 0.3s ease;
  }

  .btn-return:hover {
    background-color: #153b2b;
    border-color: #153b2b;
    transform: translateY(-2px);
  }

  .form-label {
    font-weight: 500;
    margin-bottom: 6px;
    font-size: 1rem;
    color: #1a3c2e;
  }

  .form-control {
    border-radius: 8px;
    border: 2px solid #ced4da;
    padding: 8px 12px;
    font-size: 14px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
  }

  .form-control::placeholder {
    font-size: 12px;
    color: #6c757d;
  }

  .form-control:focus {
    border-color: #F8861A;
    box-shadow: 0 0 6px rgba(248, 134, 26, 0.4);
    outline: none;
  }

  .form-select {
    border-radius: 8px;
    border: 2px solid #ced4da;
    padding: 8px 30px;
    width: 100%;
    font-size: 14px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
  }

  .form-select:focus {
    border-color: #F8861A;
    box-shadow: 0 0 6px rgba(248, 134, 26, 0.4);
    outline: none;
  }

  .input-group-text {
    background-color: #e9ecef;
    border: 2px solid #ced4da;
    border-radius: 8px;
    padding: 8px 12px;
    font-size: 14px;
    color: #1a3c2e;
  }

  .info-box {
    background-color: #d4e4da;
    border-left: 5px solid #F8861A;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 16px;
    font-size: 14px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  }

  h2 {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #1a3c2e;
  }

  h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 10px;
  }

  h5 {
    font-size: 1.1rem;
    color: #2e5a4a;
    margin-bottom: 15px;
  }

  .energy-form {
    background: linear-gradient(135deg, #fefcf8 0%, #fffbf2 100%);
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    padding: 20px;
    transition: all 0.3s ease;
  }

  .energy-form:hover {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
  }

  .step-indicator {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
  }

  .indicator {
    width: 10px;
    height: 10px;
    background: #ced4da;
    border-radius: 50%;
    transition: background 0.3s ease, transform 0.3s ease;
  }

  .indicator.active {
    background: #F8861A;
    transform: scale(1.2);
  }

  .text-anime-wave {
    animation: wave 2s infinite;
  }

  @keyframes wave {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-5px);
    }
  }

  img.img-fluid {
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  img.img-fluid:hover {
    transform: scale(1.02);
  }

  p.text-muted {
    font-size: 0.9rem;
    color: #6c757d;
  }
</style>
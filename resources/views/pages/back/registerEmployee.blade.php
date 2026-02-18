@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="registerEmployeeWrapper">
        @if (session('registered'))
            <div class="modalRegisterComplete" id="modalRegisterEmployer">
                <div class="modalTitle">You have registered successfully your employee.</div>
                <div class="modalText">
                    <p>We have emailed your login details, allowing you to access our website and take the course at your convenience.
                        <br><br>
                        Please check your spam or junk mail folder, just in case. If you'd like to send the course to your employee, please click the link below.
                        (<a href="https://manualhandlingireland.com/packages">https://manualhandlingireland.com/packages</a>).
                        <br><br>
                        To proceed, ensure you have purchased the course(s). If not, visit the homepage, make the necessary purchase, and then proceed to send it to your employees.
                    </p>
                </div>
                <div class="adminButton" style="display: flex; align-items: center; justify-content: center; margin-top: 20px; width: auto; padding: 20px" id="understoodButton">UNDERSTOOD</div>
            </div>
        @endif
        <div class="leftRegisterEmployee">
            <div class="stepsCircle">
                <div class="stepsContainer">
                    <div class="stepsCircleTitle">STEP 1- Register The Employee</div>
                    <div class="circle-progress first-circle" data-aos="fade-right">
                        <div class="circle-nr">1</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="25, 100"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />

                        </svg>
                    </div>
                </div>
            </div>

            <div class="stepsCircle">
                <div class="stepsContainer">
                    <div class="stepsCircleTitle">STEP 2- Check Your Dashboard</div>
                    <div class="circle-progress first-circle" data-aos="fade-right">
                        <div class="circle-nr">2</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="75, 100"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stepsCircle">
                <div class="stepsContainer">
                    <div class="stepsCircleTitle">STEP 3- Send Him The Course Link</div>
                    <div class="circle-progress first-circle" data-aos="fade-right">
                        <div class="circle-nr">3</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="100, 100"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightRegisterEmployee">
            <div class="adminHomePageTitle" style="font-size: 36px">Register Your Employees</div>
            <div class="adminHomePageDescription" style="font-size: 18px">Register Your Employees by adding their details in the form</div>
            <form action="{{route('register.employee.store')}}" method="POST" class="registerEmployeeForm">
                @csrf
                <label for="userNameEmployee" class="formLabel" style="font-size: 20px">Employee Full Name</label>
                <input type="text" id="userNameEmployee" name="name" class="formInputProfile">

                <label for="userEmailEmployee" class="formLabel" style="font-size: 20px">Employee Email</label>
                <input type="email" id="userEmailEmployee" name="email" class="formInputProfile">

                <label for="userEmailPhone" class="formLabel" style="font-size: 20px">Employee Phone Number</label>
                <input type="text" id="userEmailPhone" name="phone" class="formInputProfile">

                <button type="submit" class="adminButton" id="showModalRegister" style="font-size: 20px; margin-top: 27px">Add</button>
            </form>
            <div id="errorDiv">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>*{{$error}}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <script src="{{asset('js/showModalRegisterEmployee.js')}}"></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection

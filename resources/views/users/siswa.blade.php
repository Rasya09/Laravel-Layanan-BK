@extends('users.layout.app')

@section('css')
<link rel="stylesheet" href="assets/css/siswa.css">
@endsection

@section('content')
<div class="container">
    <div class="left-side">
        <div class="back">
            <a href="/">
                <button>
                    <iconify-icon icon="ion:arrow-back-outline"></iconify-icon>
                </button>
            </a>
          
            <p>Profile</p>
        </div>
        <div class="profile">
            <div class="card">
                <div class="first-content">
                    <div class="pp">
                        <img src="" alt="">
                    </div>
                    <p class="nama">Divadan Arya Putrama</p>
                    <p class="kelas">XI PPLG 2</p>
                </div>
                <div class="second-content">
                    <div class="nisn">
                        <p>NISN</p>
                        <p>987654321</p>
                    </div>
                    <div class="name">
                        <p>Name</p>
                        <p>Divadan Arya Putrama</p>
                    </div>
                    <div class="class">
                        <p>Class</p>
                        <p>XI PPLG 2</p>
                    </div>
                    <div class="gender">
                        <p>Gender</p>
                        <p>Male</p>
                    </div>
                    <div class="birth-date">
                        <p>Birth Date</p>
                        <p>22 - 12 - 2005</p>
                    </div>
                    <div class="phone-nmbr">
                        <p>Phone Number</p>
                        <p>081234567</p>
                    </div>
                    <div class="email">
                        <p>Email</p>
                        <p>Divadanarya@gmail.com</p>
                    </div>
                </div>

            </div>
            <button class="edit-profile">
                Edit Profile
            </button>

        </div>

    </div>
    <div class="right-side">
        <div class="schedule">
            <div class="schedule-header">
                <div class="titles">
                    <p>Schedule</p>
                    <p>You can check your schedule here</p>
                </div>
                <div class="date-picker">
                    <input type="date" id="Test_DatetimeLocal">
                </div>
            </div>
            <div class="schedule-body">
                <table>
                    <tr>
                        <td></td>
                        <td>08.00</td>
                        <td>09.00</td>
                        <td>10.00</td>
                        <td>11.00</td>
                        <td>12.00</td>
                        <td>13.00</td>
                        <td>14.00</td>
                        <td>15.00</td>
                    </tr>
                    <tr class="bbt">
                        <td>Mon</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="bbt">
                        <td>Tue</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="bbt">
                        <td>Wed</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="bbt">
                        <td>Thu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="bbt">
                        <td>Fri</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="bbt">
                        <td>Sat</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="private-conseling">
            <div class="private-header">
                <p>Private Conseling</p>
                <p>You can check add a request for a <span>private conseling</span></p>
            </div>
            <div class="private-body">
                <a href="/private-view">
                    <div class="view-private">
                        <div class="view-private-icon">
                            <img src="assets/icon/view-private.png" alt="">
                        </div>
                        <div class="view-private-text">
                            <p>View Schedule</p>
                            <p>View your private conseling schedule here !</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="input-private">
                        <div class="input-private-icon">
                            <img src="assets/icon/input-private.png" alt="">
                        </div>
                        <div class="input-private-text">
                            <p>Request A Conseling</p>
                            <p>Request for a private conseling service here !</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="study-conseling">
            <div class="study-header">
                <p>Study Conseling</p>
                <p>You can check add a request for a <span>study conseling</span></p>
            </div>
            <div class="study-body">
                <a href="/study-view">
                    <div class="view-study">
                        <div class="view-study-icon">
                            <img src="assets/icon/view-study.png" alt="">
                        </div>
                        <div class="view-study-text">
                            <p>View Schedule</p>
                            <p>View your study conseling schedule here !</p>
                        </div>
                    </div>
                </a>
                <a href="/career-view">
                    <div class="input-study">
                        <div class="input-study-icon">
                            <img src="assets/icon/input-study.png" alt="">
                        </div>
                        <div class="input-study-text">
                            <p>Request A Conseling</p>
                            <p>Request for a study conseling service here !</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="social-conseling">
            <div class="social-header">
                <p>Social Conseling</p>
                <p>You can check add a request for a <span>social conseling</span></p>
            </div>
            <div class="social-body">
                <a href="/social-view">
                    <div class="view-social">
                        <div class="view-social-icon">
                            <img src="assets/icon/view-social.png" alt="">
                        </div>
                        <div class="view-social-text">
                            <p>View Schedule</p>
                            <p>View your social conseling schedule here !</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="input-social">
                        <div class="input-social-icon">
                            <img src="assets/icon/input-social.png" alt="">
                        </div>
                        <div class="input-social-text">
                            <p>Request A Conseling</p>
                            <p>Request for a social conseling service here !</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="career-conseling">
            <div class="career-header">
                <p>Career Conseling</p>
                <p>You can check add a request for a <span>career conseling</span></p>
            </div>
            <div class="career-body">
                <a href="/career-view">
                    <div class="view-career">
                        <div class="view-career-icon">
                            <img src="assets/icon/view-career.png" alt="">
                        </div>
                        <div class="view-career-text">
                            <p>View Schedule</p>
                            <p>View your career conseling schedule here !</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="input-career">
                        <div class="input-career-icon">
                            <img src="assets/icon/input-career.png" alt="">
                        </div>
                        <div class="input-career-text">
                            <p>Request A Conseling</p>
                            <p>Request for a career conseling service here !</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

</div>
@endsection

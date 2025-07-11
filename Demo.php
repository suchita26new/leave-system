<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบลาเรียนออนไลน์ วิทยาลัยอาชีวศึกษาลำปาง</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 90%;
            max-width: 1200px;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .content {
            padding: 2rem;
        }

        .nav-tabs {
            display: flex;
            border-bottom: 2px solid #eee;
            margin-bottom: 2rem;
        }

        .nav-tab {
            padding: 1rem 2rem;
            cursor: pointer;
            background: none;
            border: none;
            font-size: 1.1rem;
            color: #666;
            transition: all 0.3s ease;
        }

        .nav-tab.active {
            color: #667eea;
            border-bottom: 3px solid #667eea;
        }

        .nav-tab:hover {
            color: #667eea;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #333;
        }

        input, select, textarea {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }

        .btn-danger {
            background: linear-gradient(135deg, #dc3545 0%, #e74c3c 100%);
        }

        .btn-info {
            background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .table-container {
            overflow-x: auto;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .status-badge {
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-approved {
            background: #d4edda;
            color: #155724;
        }

        .status-rejected {
            background: #f8d7da;
            color: #721c24;
        }

        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        .user-info {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .image-preview {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 1rem;
        }

        .leave-card {
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .leave-card h3 {
            color: #333;
            margin-bottom: 0.5rem;
        }

        .leave-card p {
            margin-bottom: 0.5rem;
            color: #666;
        }

        .teacher-verification {
            background: #e7f3ff;
            border: 1px solid #b3d9ff;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .teacher-verification h3 {
            color: #0066cc;
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .nav-tabs {
                flex-direction: column;
            }
            
            .nav-tab {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ระบบลาเรียนออนไลน์</h1>
            <p>จัดการคำขอลาเรียนของนักเรียนวิทยาลัยอาชีวศึกษาลำปาง</p>
        </div>

        <div class="content">
            <div class="nav-tabs">
                <button class="nav-tab active" onclick="showTab('login')">เข้าสู่ระบบ</button>
                <button class="nav-tab" onclick="showTab('student')">นักเรียน</button>
                <button class="nav-tab" onclick="showTab('teacher')">ครู</button>
            </div>

            <!-- Login Tab -->
            <div id="login" class="tab-content active">
                <h2>เข้าสู่ระบบ</h2>
                <form id="loginForm">
                    <div class="form-group">
                        <label for="username">เลขหรัสนักศึกษา/รหัสครู:</label>
                        <input type="text" id="username" name="username" required placeholder="กรอกเลขหรัสนักศึกษาหรือรหัสครู">
                    </div>
                    <div class="form-group">
                        <label for="role">ประเภทผู้ใช้:</label>
                        <select id="role" name="role" required>
                            <option value="">เลือกประเภทผู้ใช้</option>
                            <option value="student">นักเรียน</option>
                            <option value="teacher">ครู</option>
                        </select>
                    </div>
                    <button type="submit" class="btn">เข้าสู่ระบบ</button>
                </form>
            </div>

            <!-- นักเรียน Tab -->
            <div id="student" class="tab-content">
                <div id="userInfo" class="user-info" style="display: none;">
                    <h3>ข้อมูลผู้ใช้</h3>
                    <div id="studentInfo"></div>
                    <button onclick="logout()" class="btn btn-danger" style="margin-top: 1rem;">ออกจากระบบ</button>
                </div>

                <h2>ฟอร์มขอลาเรียน</h2>
                <div id="studentAlert"></div>
                <form id="leaveForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fullName">ชื่อ-นามสกุล:</label>
                            <input type="text" id="fullName" name="fullName" required>
                        </div>
                        <div class="form-group">
                            <label for="studentId">รหัสนักเรียน:</label>
                            <input type="text" id="studentId" name="studentId" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="citizenId">เลขประจำตัวประชาชน:</label>
                            <input type="text" id="citizenId" name="citizenId" maxlength="13">
                        </div>
                        <div class="form-group">
                            <label for="department">แผนก/สาขา:</label>
                            <input type="text" id="department" name="department">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="advisor">อาจารย์ที่ปรึกษา:</label>
                            <input type="text" id="advisor" name="advisor">
                        </div>
                        <div class="form-group">
                            <label for="leaveDate">วันที่ลา:</label>
                            <input type="date" id="leaveDate" name="leaveDate" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="leaveEndDate">ถึงวันที่:</label>
                            <input type="date" id="leaveEndDate" name="leaveEndDate" required>
                        </div>
                        <div class="form-group">
                            <label for="leaveType">ประเภทการลา:</label>
                            <select id="leaveType" name="leaveType" required>
                                <option value="">เลือกประเภทการลา</option>
                                <option value="ลาป่วย">ลาป่วย</option>
                                <option value="ลากิจ">ลากิจ</option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="note">หมายเหตุ/เหตุผลการลา:</label>
                        <textarea id="note" name="note" placeholder="กรุณาระบุเหตุผลการลา..."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">แนบเอกสาร/รูปภาพ (ถ้ามี):</label>
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>
                    
                    <button type="submit" class="btn">ส่งคำขอลา</button>
                </form>

                <h2>สถานะการส่งใบลา</h2>
                <div id="studentLeaveStatus"></div>
            </div>

            <!-- ครู Tab -->
            <div id="teacher" class="tab-content">
                <div id="teacherUserInfo" class="user-info" style="display: none;">
                    <h3>ข้อมูลผู้ใช้</h3>
                    <div id="teacherInfo"></div>
                    <button onclick="logout()" class="btn btn-danger" style="margin-top: 1rem;">ออกจากระบบ</button>
                </div>

                <div id="teacherVerification" class="teacher-verification">
                    <h3>ตรวจสอบสถานะครู</h3>
                    <form id="teacherVerificationForm">
                        <div class="form-group">
                            <label for="teacherCode">รหัสครู:</label>
                            <input type="text" id="teacherCode" name="teacherCode" required placeholder="กรอกรหัสครู">
                        </div>
                        <button type="submit" class="btn btn-info">ตรวจสอบสถานะ</button>
                    </form>
                    <div id="teacherVerificationResult"></div>
                </div>

                <h2>รายการคำขอลา</h2>
                <div id="teacherAlert"></div>
                
                <div class="table-container">
                    <table id="leaveTable">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>รหัสนักเรียน</th>
                                <th>วันที่ลา</th>
                                <th>ประเภทการลา</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody id="leaveTableBody">
                            <!-- Data will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for leave details -->
    <div id="detailModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>รายละเอียดคำขอลา</h2>
            <div id="leaveDetails"></div>
        </div>
    </div>

    <script>
        // Simulated database ฐานข้อมูลจำลอง
        let teachers = [
            { code: 'DBTech001', name: 'อาจารย์วรกาญจน์ มานะ', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' },
            { code: 'DBTech002', name: 'อาจารย์พงษ์ศักดิ์ ทองเลียบ', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' },
            { code: 'DBTech003', name: 'อาจารย์สายรุ้ง ทวีกิตติกร', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' },
            { code: 'DBTech004', name: 'อาจารย์ประณิตา ศรีสมุทร', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' },
            { code: 'DBTech005', name: 'อาจารย์ชัยวัฒน์ วงศ์โท๊ะ', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' },
            { code: 'DBTech006', name: 'อาจารย์ชญานันทน์ ธิราช', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' },
            { code: 'DBTech007', name: 'อาจารย์มายูร รัตนบุรุษ', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' },
            { code: 'DBTech008', name: 'อาจารย์ปวีณรัตน์ สิงหภิวัฒน์', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' },
            { code: 'DBTech009', name: 'อาจารย์มณีนุช แสนขัติ', department: 'สาขาเทคโนโลยีธุรกิจดิจิทัล', status: 'active' }
        ];

        let leaveRequests = [];
        let currentUser = null;

        // Tab switching
        function showTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.nav-tab').forEach(btn => {
                btn.classList.remove('active');
            });
            
            document.getElementById(tabName).classList.add('active');
            event.target.classList.add('active');
        }

        // Login form handler
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const role = document.getElementById('role').value;
            
            if (role === 'student') {
                // Check if username is exactly 11 characters for student
                if (username.length !== 11) {
                    showAlert('รหัสนักศึกษาต้องมี 11 หลัก', 'danger', 'studentAlert');
                    return;
                }
            } else if (role === 'teacher') {
                // Check if teacher code exists
                const teacher = teachers.find(t => t.code === username);
                if (!teacher) {
                    showAlert('ไม่พบรหัสครูในระบบ', 'danger', 'teacherAlert');
                    return;
                }
                if (teacher.status !== 'active') {
                    showAlert('สถานะครูไม่ได้อยู่ในสถานะปฏิบัติการ', 'danger', 'teacherAlert');
                    return;
                }
            }
            
            currentUser = {
                username: username,
                role: role,
                full_name: role === 'student' ? `นักเรียน ${username}` : teachers.find(t => t.code === username)?.name,
                student_id: role === 'student' ? username : null,
                teacher_code: role === 'teacher' ? username : null,
                department: role === 'teacher' ? teachers.find(t => t.code === username)?.department : null
            };
            
            showAlert('เข้าสู่ระบบสำเร็จ!', 'success', role === 'student' ? 'studentAlert' : 'teacherAlert');
            
            if (role === 'student') {
                // Show user info
                document.getElementById('userInfo').style.display = 'block';
                document.getElementById('studentInfo').innerHTML = `
                    <p><strong>ชื่อ:</strong> ${currentUser.full_name}</p>
                    <p><strong>รหัสนักเรียน:</strong> ${currentUser.student_id}</p>
                `;
                
                // Pre-fill student form
                document.getElementById('fullName').value = currentUser.full_name;
                document.getElementById('studentId').value = currentUser.student_id;
                
                // Load student leave status
                loadStudentLeaveStatus();
                showTab('student');
            } else {
                // Show teacher info
                document.getElementById('teacherUserInfo').style.display = 'block';
                document.getElementById('teacherInfo').innerHTML = `
                    <p><strong>ชื่อ:</strong> ${currentUser.full_name}</p>
                    <p><strong>รหัสครู:</strong> ${currentUser.teacher_code}</p>
                    <p><strong>แผนก:</strong> ${currentUser.department}</p>
                `;
                
                loadLeaveRequests();
                showTab('teacher');
            }
        });

        // Teacher verification form handler
        document.getElementById('teacherVerificationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const teacherCode = document.getElementById('teacherCode').value;
            const teacher = teachers.find(t => t.code === teacherCode);
            
            const resultDiv = document.getElementById('teacherVerificationResult');
            
            if (teacher) {
                const statusColor = teacher.status === 'active' ? '#28a745' : '#dc3545';
                const statusText = teacher.status === 'active' ? 'ปฏิบัติการ' : 'ไม่ได้ปฏิบัติการ';
                
                resultDiv.innerHTML = `
                    <div style="margin-top: 1rem; padding: 1rem; border-radius: 10px; background: #f8f9fa;">
                        <h4>ข้อมูลครู</h4>
                        <p><strong>รหัสครู:</strong> ${teacher.code}</p>
                        <p><strong>ชื่อ:</strong> ${teacher.name}</p>
                        <p><strong>แผนก:</strong> ${teacher.department}</p>
                        <p><strong>สถานะ:</strong> <span style="color: ${statusColor}; font-weight: bold;">${statusText}</span></p>
                    </div>
                `;
            } else {
                resultDiv.innerHTML = `
                    <div style="margin-top: 1rem; padding: 1rem; border-radius: 10px; background: #f8d7da; color: #721c24;">
                        <strong>ไม่พบข้อมูลครูในระบบ</strong>
                    </div>
                `;
            }
        });

        // Leave form handler
        document.getElementById('leaveForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!currentUser || currentUser.role !== 'student') {
                showAlert('กรุณาเข้าสู่ระบบก่อน', 'danger', 'studentAlert');
                return;
            }
            
            const formData = new FormData(this);
            const imageFile = formData.get('image');
            let imageData = null;
            
            // Handle image upload
            if (imageFile && imageFile.size > 0) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imageData = e.target.result;
                    saveLeaveRequest(formData, imageData);
                };
                reader.readAsDataURL(imageFile);
            } else {
                saveLeaveRequest(formData, null);
            }
        });

        function saveLeaveRequest(formData, imageData) {
            const leaveData = {
                id: leaveRequests.length + 1,
                full_name: formData.get('fullName'),
                student_id: formData.get('studentId'),
                citizen_id: formData.get('citizenId'),
                department: formData.get('department'),
                advisor: formData.get('advisor'),
                leave_date: formData.get('leaveDate'),
                leave_end_date: formData.get('leaveEndDate'),
                leave_type: formData.get('leaveType'),
                note: formData.get('note'),
                image_data: imageData,
                status: 'รอดำเนินการ',
                submitted_at: new Date().toLocaleString('th-TH')
            };
            
            leaveRequests.push(leaveData);
            showAlert('ส่งคำขอลาเรียนเรียบร้อยแล้ว', 'success', 'studentAlert');
            document.getElementById('leaveForm').reset();
            loadStudentLeaveStatus();
        }

        // Load student leave status
        function loadStudentLeaveStatus() {
            if (!currentUser || currentUser.role !== 'student') return;
            
            const studentRequests = leaveRequests.filter(r => r.student_id === currentUser.student_id);
            const statusDiv = document.getElementById('studentLeaveStatus');
            
            if (studentRequests.length === 0) {
                statusDiv.innerHTML = '<p>ยังไม่มีการส่งคำขอลา</p>';
                return;
            }
            
            statusDiv.innerHTML = studentRequests.map(request => `
                <div class="leave-card">
                    <h3>คำขอลา #${request.id}</h3>
                    <p><strong>วันที่ลา:</strong> ${new Date(request.leave_date).toLocaleDateString('th-TH')} - ${new Date(request.leave_end_date).toLocaleDateString('th-TH')}</p>
                    <p><strong>ประเภทการลา:</strong> ${request.leave_type}</p>
                    <p><strong>สถานะ:</strong> <span class="status-badge status-${getStatusClass(request.status)}">${request.status}</span></p>
                    <p><strong>วันที่ส่ง:</strong> ${request.submitted_at}</p>
                </div>
            `).join('');
        }

        // โหลดใบลาสำหรับครู
        function loadLeaveRequests() {
            const tbody = document.getElementById('leaveTableBody');
            tbody.innerHTML = '';
            
            leaveRequests.forEach((request, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${request.full_name}</td>
                    <td>${request.student_id}</td>
                    <td>${new Date(request.leave_date).toLocaleDateString('th-TH')} - ${new Date(request.leave_end_date).toLocaleDateString('th-TH')}</td>
                    <td>${request.leave_type}</td>
                    <td><span class="status-badge status-${getStatusClass(request.status)}">${request.status}</span></td>
                    <td>
                        <button onclick="showDetails(${request.id})" class="btn" style="padding: 0.5rem 1rem; margin-right: 0.5rem;">รายละเอียด</button>
                        ${request.status === 'รอดำเนินการ' ? `
                            <button onclick="approveLeave(${request.id})" class="btn btn-success" style="padding: 0.5rem 1rem; margin-right: 0.5rem;">อนุมัติ</button>
                            <button onclick="rejectLeave(${request.id})" class="btn btn-danger" style="padding: 0.5rem 1rem;">ไม่อนุมัติ</button>
                        ` : ''}
                    </td>
                `;
                tbody.appendChild(row);
            });
        }

        // แสดงรายละเอียดการลา
        function showDetails(id) {
            const request = leaveRequests.find(r => r.id === id);
            if (request) {
                document.getElementById('leaveDetails').innerHTML = `
                    <p><strong>ชื่อ-นามสกุล:</strong> ${request.full_name}</p>
                    <p><strong>รหัสนักเรียน:</strong> ${request.student_id}</p>
                    <p><strong>เลขประจำตัวประชาชน:</strong> ${request.citizen_id || 'ไม่ระบุ'}</p>
                    <p><strong>แผนก/สาขา:</strong> ${request.department || 'ไม่ระบุ'}</p>
                    <p><strong>อาจารย์ที่ปรึกษา:</strong> ${request.advisor || 'ไม่ระบุ'}</p>
                    <p><strong>วันที่ลา:</strong> ${new Date(request.leave_date).toLocaleDateString('th-TH')}</p>
                    <p><strong>ถึงวันที่:</strong> ${new Date(request.leave_end_date).toLocaleDateString('th-TH')}</p>
                    <p><strong>ประเภทการลา:</strong> ${request.leave_type}</p>
                    <p><strong>หมายเหตุ:</strong> ${request.note || 'ไม่มี'}</p>
                    <p><strong>วันที่ส่งคำขอ:</strong> ${request.submitted_at}</p>
                    <p><strong>สถานะ:</strong> <span class="status-badge status-${getStatusClass(request.status)}">${request.status}</span></p>
                    ${request.image_data ? `
                        <p><strong>เอกสาร/รูปภาพ:</strong></p>
                        <img src="${request.image_data}" alt="แนบเอกสาร" class="image-preview">
                    ` : ''}
                `;
                document.getElementById('detailModal').style.display = 'block';
            }
        }

        // Close modal
        function closeModal() {
            document.getElementById('detailModal').style.display = 'none';
        }

        // Approve leave
        function approveLeave(id) {
            const request = leaveRequests.find(r => r.id === id);
            if (request) {
                request.status = 'อนุมัติ';
                request.approved_by = currentUser.full_name;
                request.approved_at = new Date().toLocaleString('th-TH');
                loadLeaveRequests();
                showAlert('อนุมัติคำขอลาเรียบร้อยแล้ว', 'success', 'teacherAlert');
            }
        }

        // Reject leave
        function rejectLeave(id) {
            const request = leaveRequests.find(r => r.id === id);
            if (request) {
                request.status = 'ไม่อนุมัติ';
                request.rejected_by = currentUser.full_name;
                request.rejected_at = new Date().toLocaleString('th-TH');
                loadLeaveRequests();
                showAlert('ไม่อนุมัติคำขอลาเรียบร้อยแล้ว', 'success', 'teacherAlert');
            }
        }

        // Get status class
        function getStatusClass(status) {
            switch(status) {
                case 'รอดำเนินการ': return 'pending';
                case 'อนุมัติ': return 'approved';
                case 'ไม่อนุมัติ': return 'rejected';
                default: return 'pending';
            }
        }

        // Show alert
        function showAlert(message, type, containerId) {
            const container = document.getElementById(containerId);
            container.innerHTML = `
                <div class="alert alert-${type}">
                    ${message}
                </div>
            `;
            
            setTimeout(() => {
                container.innerHTML = '';
            }, 5000);
        }

        // Logout function
        function logout() {
            currentUser = null;
            document.getElementById('userInfo').style.display = 'none';
            document.getElementById('teacherUserInfo').style.display = 'none';
            document.getElementById('studentLeaveStatus').innerHTML = '';
            document.getElementById('leaveTableBody').innerHTML = '';
            document.getElementById('teacherVerificationResult').innerHTML = '';
            document.getElementById('loginForm').reset();
            showTab('login');
            showAlert('ออกจากระบบเรียบร้อยแล้ว', 'success', 'studentAlert');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('detailModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }

        // Set minimum date to today
        document.getElementById('leaveDate').addEventListener('change', function () {
            document.getElementById('leaveEndDate').min = this.value;
        });

    </script>
</body>
</html>
<div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <x-stats-card title="Tổng số sinh viên" tooltip="Showing number of all active students"
            value="{{ $totalStudents }}" percentage="" />
        @if (auth()->user()->role == 'admin')
        <x-stats-card title="Tổng số người dùng" tooltip="Showing number of all active Users" value="{{ $totalUsers }}"
            percentage="" />
        <x-stats-card title="Tổng số giáo viên" tooltip="Showing number of all active Teachers"
            value="{{ $totalTeachers }}" percentage="" />
        @endif
        <x-stats-card title="Điểm danh hôm nay" tooltip="" value="{{ $attendanceToday }}" percentage="" />
        <x-stats-card title="Có mặt ngày hôm nay" tooltip="" value="{{ $presentToday }}" percentage="" />
        <x-stats-card title="Vắng mặt ngày hôm nay" tooltip="" value="{{ $absentToday }}" percentage="" />
        <x-stats-card title="Tỉ lệ đi học hàng tuần" tooltip="" value="{{ $weeklyAttendanceRate }}"
            percentage="{{ $weeklyAttendanceRate }}" />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Chart for Monthly Attendance -->




</div>
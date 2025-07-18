import './bootstrap';
import 'datatables.net-dt';
import 'datatables.net-dt/css/jquery.dataTables.css'; 
import $ from 'jquery';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


$(document).ready(function () {
    $('#coursesTable').DataTable({
        paging: true,
        searching: true,
        info: true,
        order: [[0, 'asc']],
        columnDefs: [
            { orderable: false, targets: 3 } // Adjust as needed
        ]
    });
});

import './bootstrap';
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

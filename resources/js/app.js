import './bootstrap';
import Alpine from 'alpinejs';

import $ from 'jquery'; // Import jQuery
window.jQuery = window.$ = $; // Make jQuery globally available

import DataTable from 'datatables.net-dt';


window.Alpine = Alpine;

// Initialize DataTables with your desired options
$(document).ready(function() {
    let table = new DataTable('#myTable', {
        paging: true,         // Keep pagination (Previous, 1, Next)
        searching: true,      // ENABLE DataTables' default search input (the one on the top right)
        info: false,          // DISABLE the "Showing X to Y of Z entries" text
        lengthChange: false,  // DISABLE the "Show X entries per page" dropdown

        order: [[0, 'asc']],  // Keep initial sorting
        columnDefs: [
            { orderable: false, targets: 3 } // Keep non-orderable column
        ]
    });

    // You can remove any custom JavaScript that was previously connecting
    // the hardcoded left search bar to DataTables, as you're removing it now.
    // E.g., remove $('#myLeftSearchInput').on('keyup', ...); if you added it.
});


Alpine.start();
import './bootstrap';
import Alpine from 'alpinejs';

import $ from 'jquery'; // Import jQuery
window.jQuery = window.$ = $; // Make jQuery globally available

import DataTable from 'datatables.net-dt';


window.Alpine = Alpine;

// Initialize DataTables with your desired options
$(document).ready(function() {
    let table = new DataTable('#myTable', {
        paging: true,         // Keep pagination (Previous, 1, Next)
        searching: true,      // ENABLE DataTables' default search input (the one on the top right)
        info: false,          // DISABLE the "Showing X to Y of Z entries" text
        lengthChange: false,  // DISABLE the "Show X entries per page" dropdown

        order: [[0, 'asc']],  // Keep initial sorting
        columnDefs: [
            { orderable: false, targets: 3 } // Keep non-orderable column
        ]
    });

    // You can remove any custom JavaScript that was previously connecting
    // the hardcoded left search bar to DataTables, as you're removing it now.
    // E.g., remove $('#myLeftSearchInput').on('keyup', ...); if you added it.
});


Alpine.start();
import './bootstrap';
import Alpine from 'alpinejs';

import $ from 'jquery'; // Import jQuery
window.jQuery = window.$ = $; // Make jQuery globally available

import DataTable from 'datatables.net-dt';


window.Alpine = Alpine;

// Initialize DataTables with your desired options
$(document).ready(function() {
    let table = new DataTable('#myTable', {
        paging: true,         // Keep pagination (Previous, 1, Next)
        searching: true,      // ENABLE DataTables' default search input (the one on the top right)
        info: false,          // DISABLE the "Showing X to Y of Z entries" text
        lengthChange: false,  // DISABLE the "Show X entries per page" dropdown

        order: [[0, 'asc']],  // Keep initial sorting
        columnDefs: [
            { orderable: false, targets: 3 } // Keep non-orderable column
        ]
    });

    // You can remove any custom JavaScript that was previously connecting
    // the hardcoded left search bar to DataTables, as you're removing it now.
    // E.g., remove $('#myLeftSearchInput').on('keyup', ...); if you added it.
});


Alpine.start();
import './bootstrap';
import Alpine from 'alpinejs';
import DataTable from 'datatables.net-dt';

window.Alpine = Alpine;
let table = new DataTable('#myTable');
Alpine.start();


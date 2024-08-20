import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import './jquery';
import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.js';


function confirmDelete() {
    return confirm('Are you sure you want to delete this record?');
}
window.confirmDelete = confirmDelete;

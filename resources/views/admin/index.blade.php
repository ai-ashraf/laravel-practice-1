<x-admin.layout.sidebar>

<div class="row my-5">
    <h3 class="fs-4 mb-3">Total Bookings</h3>
    <div class="col">

        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Package</th>
                    <th scope="col">Tourist Name</th>
                    <th scope="col">Person</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td>Bandorban</td>
                    <td>Kobir Hasan</td>
                    <td>6000 Tk</td>
                </tr>


                 <tr>
                    <th scope="row">2</th>
                    <td>Bandorban</td>
                    <td>Kobir Hasan</td>
                    <td>7500 Tk</td>
                </tr>
                 <tr>
                    <th scope="row">3</th>
                    <td>Sada Pathor</td>
                    <td>Jiniya</td>
                    <td>6000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Sada Pathor</td>
                    <td>Asha</td>
                    <td>6000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Saint Martin</td>
                    <td>Shuvo</td>
                    <td>10000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Bandorban</td>
                    <td>Nazmul</td>
                    <td>7000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Sada Pathor</td>
                    <td>Tamim Islam</td>
                    <td>6000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Saint Martin</td>
                    <td>Ashraf</td>
                    <td>10000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Cox's Bazar</td>
                    <td>Sazib</td>
                    <td>6000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Cox's Bazar</td>
                    <td>Zico</td>
                    <td>8000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Amiyakhum</td>
                    <td>Jico</td>
                    <td>9000 Tk</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Cox's Bazar</td>
                    <td>Saikat</td>
                    <td>8000 Tk</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>


</div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
el.classList.toggle("toggled");
};
</script>
</body>

</html>
</x-admin.layout.sidebar>

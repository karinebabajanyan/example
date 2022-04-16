<x-app-layout>
    @include('layouts.manager_layout')
    <section class="home-section">
        @include('layouts.manager_navbar')
        <div class="home-content">
            <div class="overview-boxes">
                <div class="top-sales box">
                    <table>
                        <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>:</td>
                            <td style="text-transform: capitalize">{{ Auth::user()->user_type }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

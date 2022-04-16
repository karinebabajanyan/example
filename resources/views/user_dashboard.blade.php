<x-app-layout>
@include('layouts.user_layout')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="home-section">
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
                </div>
            </div>
        </div>
    </div>
    <style>
        .home-section .home-content{
            position: relative;
            padding-top: 20px;
        }
        .home-content .overview-boxes{
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 20px;
            margin-bottom: 26px;
        }
        table {
            border: none;
            font-size: 16px;
            height: 270px;
            width: 80%;
        }
    </style>
</x-app-layout>

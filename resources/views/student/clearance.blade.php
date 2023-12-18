<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.js">
    @include('partials.__header')
    @include('partials.__student_sidebar')
    <title>Clearance</title>
    <style>
        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        }
        #downloadLink{
            /* border: 1px solid; */
            border-radius: 5px;
            padding: 5px; 
            background-color: #fef08a; 

            display: flex;
            align-items: center;
        }
        #downloadLink:hover{
            font-weight: bold;
        }
        .download-icon:hover{
            color: royalblue;
        }
        .containers{
            cursor: pointer;  
        }
        .containers:hover{
            font-weight: bold;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        }

        #ListOfOfficesDropdown{
            border: 1px solid;
            border-radius: 5px;
            padding: 5px;
            /* padding-left: 50px; */
            padding-right: 100%;
        }
    </style>
</head>
<body>
{{-- right side section --}}
<div class="md:ml-60">
    {{-- reusable page header --}}
    @include('partials.__student_pageheader')

    {{-- main content --}}
    <div class="p-4 m-4 shadow-lg bg-white border-gray-200 rounded-lg " style="min-height: 90vh">
        {{-- navigation container --}}
        <div class="flex items-center mb-4 rounded">
            {{-- breadcrumb nav container --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items space-x-1 md:space-x-3">
                    <li aria-current="page" class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 ">
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">clear_all</span>
                            Clearance
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex items-center justify-center py-2 mb-4 rounded">
            <ol class="inline-flex items space-x-1 md:space-x-3">
                <li aria-current="page"
                    class="inline-flex items-center text-sm font-medium dark:text-gray-900">
                    <span class="flex-1 ml-3 whitespace-nowrap text-2xl">Clearance</span>
                </li>
            </ol>
        </div>
        <div class="flex py-2 mb-4 rounded" style="justify-content: space-between;">
            <div>
                <select id="ListOfOfficesDropdown" name="List_of_Offices">
                    <option value="" disabled selected hidden>Select Offices</option>
                    <option value="OSAS" id="office1">OSAS</option>
                    <option value="Registrar" id="office2">Registrar</option>
                    <option value="Library" id="office3">Library</option>
                    <option value="Guidance" id="office4">Guidance</option>
                </select>
            </div>
            <div>
                <div class="flex items-end justify-end">
                    <a id="downloadLink" href="{{ route('download_file', ['file' => 'Student-CLearance-Form-New.pdf']) }}"><span style="margin-right: 5px;">Clearance Form</span><span class="download-icon material-symbols-outlined">download</span></a>
                </div>
            </div>
        </div>
        {{-- For the display of table based on the selected office --}}
        <div id="officeDetails" style="display: none;" class="flex items-center justify-center py-2 mb-4 rounded">
            <!-- Table content will be displayed here -->
        </div>
        {{-- Script for the dropdown --}}
        <script>
            // Disabling the first option
            document.getElementById('ListOfOfficesDropdown').addEventListener('change', function() {
                if (this.value === '') {
                    this.options[0].disabled = true;
                }
            });

            // Displaying the table
            document.getElementById('ListOfOfficesDropdown').addEventListener('change', function() {
            const selectedValue = this.value;
            const officeDetails = document.getElementById('officeDetails');

                if (selectedValue !== '') {
                    // Show the office details div
                    officeDetails.style.display = 'block';
                    // Clear previous content
                    officeDetails.innerHTML = '';

                    // Create and populate the table based on the selected office
                    const table = document.createElement('table');
                    // Populate the table with data specific to the selected office
                    // Replace this with your actual data or API calls
                    if (selectedValue === 'OSAS') {
                        // Example data for office 1
                        table.innerHTML = `
                            <thead style="">
                                <tr>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">No. of Missed Attendance</th>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">No. of 'No Uniform' Days</th>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">Clearance Status</th>
                                    <!-- Add other headers -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; text-align: center;">0</td>
                                    <td style="padding: 8px; text-align: center;">0</td>
                                    <td style="padding: 8px; text-align: center;">Cleared</td>
                                    <!-- Add other cells -->
                                </tr>
                                <!-- Add other rows -->
                            </tbody>
                        `;
                    } else if (selectedValue === 'Registrar') {
                        // Example data for office 2
                        table.innerHTML = `
                            <thead>
                                <tr>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">No. of Missed Attendance</th>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">No. of 'No Uniform' Days</th>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">Clearance Status</th>
                                    <!-- Add other headers -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; text-align: center;">3</td>
                                    <td style="padding: 8px; text-align: center;">2</td>
                                    <td style="padding: 8px; text-align: center;">Pending</td>
                                    <!-- Add other cells -->
                                </tr>
                                <!-- Add other rows -->
                            </tbody>
                        `;
                    } else if (selectedValue === 'Library') {
                        // Example data for office 3
                        table.innerHTML = `
                            <thead>
                                <tr>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">No. of Missed Attendance</th>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">No. of 'No Uniform' Days</th>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">Clearance Status</th>
                                    <!-- Add other headers -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; text-align: center;">0</td>
                                    <td style="padding: 8px; text-align: center;">0</td>
                                    <td style="padding: 8px; text-align: center;">Cleared</td>
                                    <!-- Add other cells -->
                                </tr>
                                <!-- Add other rows -->
                            </tbody>
                        `;
                    } else if (selectedValue === 'Guidance') {
                        // Example data for office 4
                        table.innerHTML = `
                            <thead>
                                <tr>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">No. of Missed Attendance</th>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">No. of 'No Uniform' Days</th>
                                    <th style="background-color: #f2f2f2; padding: 8px; text-align: center;">Clearance Status</th>
                                    <!-- Add other headers -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; text-align: center;">3</td>
                                    <td style="padding: 8px; text-align: center;">2</td>
                                    <td style="padding: 8px; text-align: center;">In Progress</td>
                                    <!-- Add other cells -->
                                </tr>
                                <!-- Add other rows -->
                            </tbody>
                        `;
                    }

                    // Append the table to the officeDetails div
                    officeDetails.appendChild(table);
                } else {
                    officeDetails.style.display = 'none'; // Hide the office details div if no office is selected
                }
            });
        </script>

        <br>
        {{--scholarships container--}} 
        {{-- <div id="scholarship-container" class="grid grid-cols-2 gap-4 mb-4 pl-11">
            Clearance
            <div class="containers flex flex-col items-center justify-center h-auto p-4 rounded-lg border border-gray-900">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <p class="label" style="font-size: x-large;">
                            List of Offices
                        </p>
                    </div>
                </div>
            </div>
            <div class="containers flex flex-col items-center justify-center h-auto p-4 rounded-lg border border-gray-900">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <p class="label" style="font-size: x-large;">
                            Clearance Status
                        </p>
                    </div>
                </div>
            </div>
                      
            <div>

            </div>
        </div> --}}
    </div>
</div>
@include('partials.__footer')
</body>
</html>

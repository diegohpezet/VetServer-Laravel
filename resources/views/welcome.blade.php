<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VetServer API Documentation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <style>
    /* Fixed sidebar styling */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      max-width: 16rem;
      overflow-y: auto;
    }

    /* Responsive adjustments */
    @media (min-width: 640px) {
      .sidebar {
        max-width: 16rem;
      }
    }

    /* Padding for the main content to avoid overlap with the fixed sidebar */
    .main-content {
      margin-left: 100%;
      padding-left: 1rem;
      padding-right: 1rem;
    }

    @media (min-width: 640px) {
      .main-content {
        margin-left: 16rem;
        padding-left: 2rem;
        padding-right: 2rem;
      }
    }

    /* Background colors and white font for endpoints */
    .bg-get {
      background-color: #42bff5;
      color: white;
    }

    .bg-post {
      background-color: #4ecf6c;
      color: white;
    }

    .bg-put {
      background-color: #fccb42;
      color: white;
    }

    .bg-delete {
      background-color: #fa5f3c;
      color: white;
    }
  </style>
</head>

<body class="bg-gray-100 text-gray-800 flex">

  <!-- Sidebar -->
  <aside class="sidebar bg-purple-900 text-white p-6">
    <h1 class="text-3xl font-bold mb-8">VetServer API</h1>
    <nav class="space-y-4">
      <a href="#owners" class="block text-lg font-semibold hover:bg-purple-700 p-2 rounded">Owners</a>
      <a href="#pets" class="block text-lg font-semibold hover:bg-purple-700 p-2 rounded">Pets</a>
      <a href="#appointments" class="block text-lg font-semibold hover:bg-purple-700 p-2 rounded">Appointments</a>
      <a href="#treatments" class="block text-lg font-semibold hover:bg-purple-700 p-2 rounded">Treatments</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="main-content flex-1 p-8">
    <div id="introduction" class="mb-12">
      <h2 class="text-4xl font-bold text-purple-900 mb-8">Introduction</h2>
      <div class="bg-white shadow-md rounded-lg p-6">
        <p class="mb-4">
          Welcome to the VetServer API, your comprehensive solution for managing veterinary operations efficiently and effectively. Whether you're a developer integrating with our system or a veterinary professional seeking to streamline clinic operations, this API offers robust capabilities to manage owners, pets, appointments, and treatments.
        </p>
        <p class="mb-4">
          As you navigate through the API, you'll find detailed documentation on how to interact with each entity. The sidebar on your left provides easy access to different sections, allowing you to jump directly to the endpoints you need. This introduction serves as your starting point, guiding you through the essentials and ensuring you have all the information required to make the most out of the VetServer API.
        </p>
        <p class="mb-4">
          Please consider that in order to access any endpoint, <b>you'll need to provide an authentication token on the header of the request</b>. This token will be used to identify vets/managers on the system.
        </p>
      </div>
    </div>

    <div id="auth" class="mb-12">
      <h3 class="text-3xl font-semibold text-purple-900 mb-4">Vet/Auth</h3>
      <div class="bg-post shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">POST /api/register</h4>
        <p>Creates a new vet/manager on the system</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "name": "John Doe",
    "email": "johndoe@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}</pre>
      </div>
      <div class="bg-post shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">POST /api/login</h4>
        <p>Authenticates a vet/manager using their email and password.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "email": "johndoe@example.com",
    "password": "password123"
}</pre>
      </div>
      <div class="bg-post shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">POST /api/logout</h4>
        <p>Logs out a vet/manager by deleting their authentication token.</p>
      </div>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/profile</h4>
        <p>Retrieves the details of the currently authenticated vet/manager.</p>
      </div>
    </div>

    <div id="owners" class="mb-12">
      <h3 class="text-3xl font-semibold text-purple-900 mb-4">Owners</h3>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/owners</h4>
        <p>Retrieves a list of all owners.</p>
      </div>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/owners/{id}</h4>
        <p>Retrieves a specific owner by their ID.</p>
      </div>
      <div class="bg-post shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">POST /api/owners</h4>
        <p>Creates a new owner.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "name": "John Doe",
    "email": "johndoe@example.com",
    "phone": "+1234567890",
    "address_city": "New York",
    "address_street": "5th Avenue",
    "address_number": "123"
}</pre>
      </div>
      <div class="bg-put shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">PUT /api/owners/{id}</h4>
        <p>Updates an existing owner by their ID.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "name": "Jane Doe",
    "email": "janedoe@example.com",
    "phone": "+0987654321",
    "address_city": "Los Angeles",
    "address_street": "Sunset Blvd",
    "address_number": "456"
}</pre>
      </div>
      <div class="bg-delete shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">DELETE /api/owners/{id}</h4>
        <p>Deletes an owner by their ID.</p>
      </div>
    </div>

    <div id="pets" class="mb-12">
      <h3 class="text-3xl font-semibold text-purple-900 mb-4">Pets</h3>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/pets</h4>
        <p>Retrieves a list of all pets.</p>
      </div>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/pets/{id}</h4>
        <p>Retrieves a specific pet by their ID.</p>
      </div>
      <div class="bg-post shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">POST /api/pets</h4>
        <p>Creates a new pet.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "owner_id": 6,
    "name": "Jackie",
    "age": 6,
    "species": "Dog",
    "breed": "Bulldog",
    "color": "Black/Brown",
    "gender": "Female",
    "weight": "12.48"
}</pre>
      </div>
      <div class="bg-put shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">PUT /api/pets/{id}</h4>
        <p>Updates an existing pet by their ID.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "name": "Jack",
    "age": 3,
    "species": "Cat",
    "breed": "American bobtail",
    "color": "Gray",
    "gender": "Male",
    "weight": "3.02"
}</pre>
      </div>
      <div class="bg-delete shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">DELETE /api/pets/{id}</h4>
        <p>Deletes a pet by their ID.</p>
      </div>
    </div>

    <div id="appointments" class="mb-12">
      <h3 class="text-3xl font-semibold text-purple-900 mb-4">Appointments</h3>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/appointments</h4>
        <p>Retrieves a list of all appointments.</p>
      </div>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/appointments/{id}</h4>
        <p>Retrieves a specific appointment by its ID.</p>
      </div>
      <div class="bg-post shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">POST /api/appointments</h4>
        <p>Creates a new appointment.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "pet_id": 6,
    "appointment_datetime": "2024-08-24 15:15:00",
    "description": "Control",
    "status": "pending",
}</pre>
      </div>
      <div class="bg-put shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">PUT /api/appointments/{id}</h4>
        <p>Updates an existing appointment by its ID.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "appointment_datetime": "2024-08-29 16:00:00",
    "description": "Surgery",
    "status": "pending",
}</pre>
      </div>
      <div class="bg-delete shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">DELETE /api/appointments/{id}</h4>
        <p>Deletes an appointment by its ID.</p>
      </div>
    </div>
    <div id="treatments" class="mb-12">
      <h3 class="text-3xl font-semibold text-purple-900 mb-4">Treatments</h3>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/treatments</h4>
        <p>Retrieves a list of all treatments.</p>
      </div>
      <div class="bg-get shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">GET /api/treatments/{id}</h4>
        <p>Retrieves a specific treatment by its ID.</p>
      </div>
      <div class="bg-post shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">POST /api/treatments</h4>
        <p>Creates a new treatment.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "pet_id": 2,
    "treatment_name": "Regular visit",
    "treatment_start_date": "2024-08-08",
    "description": "The pacient seems to have eaten food in bad state",
    "status": "completed"
}</pre>
      </div>
      <div class="bg-put shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">PUT /api/treatments/{id}</h4>
        <p>Updates an existing treatment by its ID.</p>
        <p class="mb-2"><strong>Request Body:</strong></p>
        <pre class="bg-gray-700 text-white p-2 rounded">{
    "treatment_name": "Surgery",
    "treatment_start_date": "2024-08-12",
    "description": "Heart treansplant",
    "status": "pending"
}</pre>
      </div>
      <div class="bg-delete shadow-md rounded-lg p-6 mb-6">
        <h4 class="text-xl font-semibold mb-2">DELETE /api/treatments/{id}</h4>
        <p>Deletes an treatment by its ID.</p>
      </div>
    </div>

    <div class="mt-8 text-center">
      <p class="text-gray-600">&copy; {{ date('Y') }} VetServer. All rights reserved.</p>
    </div>
  </div>
</body>

</html>
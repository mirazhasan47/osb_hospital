<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financial Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <style>
    body { font-family: 'Inter', system-ui, sans-serif; }
    .card { transition: all 0.3s; }
    .card:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1); }
  </style>
</head>
<body class="bg-gray-50">

<div class="max-w-7xl mx-auto p-6">

  <!-- Header -->
  <div class="flex justify-between items-center mb-8">
    <div>
      <h1 class="text-3xl font-bold text-gray-800">Financial Management System</h1>
      <p class="text-gray-600">অ্যাকাউন্টিং ও রেকর্ড কিপিং</p>
    </div>
    <div class="text-right">
      <p class="text-lg font-medium">১৩ মে ২০২৬</p>
      <p class="text-sm text-gray-500">বুধবার, ০১:১১ PM</p>
    </div>
  </div>

  <!-- Summary Cards -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded-2xl shadow card border border-green-100">
      <p class="text-green-600 font-medium">মোট আয়</p>
      <p class="text-4xl font-bold text-green-700 mt-2">১,৮৫,০০০ টাকা</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow card border border-red-100">
      <p class="text-red-600 font-medium">মোট ব্যয়</p>
      <p class="text-4xl font-bold text-red-700 mt-2">- ১,৫৩,০০০ টাকা</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow card border border-blue-100">
      <p class="text-blue-600 font-medium">নেট ব্যালেন্স</p>
      <p class="text-4xl font-bold text-blue-700 mt-2">৩২,০০০ টাকা</p>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    <!-- Cash in Hand -->
    <div class="bg-white rounded-2xl shadow p-6 card">
      <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
        <i class="fas fa-money-bill-wave text-green-600"></i> ক্যাশ ইন হ্যান্ড
      </h2>
      <p class="text-3xl font-bold text-green-700 mb-4">৩২,০৮০ টাকা</p>
      
      <div class="grid grid-cols-3 gap-4 text-center">
        <div class="bg-gray-50 p-3 rounded-xl">
          <p class="text-sm text-gray-500">২০,০০০</p>
          <p class="font-semibold">১</p>
        </div>
        <div class="bg-gray-50 p-3 rounded-xl">
          <p class="text-sm text-gray-500">১,৪০০</p>
          <p class="font-semibold">১</p>
        </div>
        <div class="bg-gray-50 p-3 rounded-xl">
          <p class="text-sm text-gray-500">১০,৬৮০</p>
          <p class="font-semibold">১</p>
        </div>
      </div>
      <button class="mt-4 w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-medium">
        বিস্তারিত ডিনোমিনেশন
      </button>
    </div>

    <!-- Bank Balance -->
    <div class="bg-white rounded-2xl shadow p-6 card">
      <h2 class="text-xl font-semibold mb-4 flex items-center gap-2">
        <i class="fas fa-university text-blue-600"></i> ব্যাংক ব্যালেন্স
      </h2>
      <p class="text-2xl font-bold text-gray-800 mb-4">মোট: ৪,২৫,০০০ টাকা</p>
      
      <div class="space-y-3">
        <div class="flex justify-between items-center bg-gray-50 p-3 rounded-xl">
          <span>সোনালী ব্যাংক</span>
          <span class="font-semibold">১,২৫,০০০</span>
        </div>
        <div class="flex justify-between items-center bg-gray-50 p-3 rounded-xl">
          <span>রূপালী ব্যাংক</span>
          <span class="font-semibold">৮৫,০০০</span>
        </div>
        <div class="flex justify-between items-center bg-gray-50 p-3 rounded-xl">
          <span>অগ্রণী ব্যাংক</span>
          <span class="font-semibold">৪৫,০০০</span>
        </div>
        <div class="flex justify-between items-center bg-gray-50 p-3 rounded-xl">
          <span>ন্যাশনাল ব্যাংক</span>
          <span class="font-semibold">৯০,০০০</span>
        </div>
        <div class="flex justify-between items-center bg-gray-50 p-3 rounded-xl">
          <span>PDR & CA</span>
          <span class="font-semibold">৮০,০০০</span>
        </div>
      </div>
    </div>

  </div>

  <!-- Fund Transfer -->
  <div class="mt-8 bg-white rounded-2xl shadow p-6 card">
    <h2 class="text-xl font-semibold mb-4">ফান্ড ট্রান্সফার</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="text-center p-4 bg-orange-50 rounded-2xl">
        <p class="text-orange-600 font-medium">Hospital</p>
        <p class="text-2xl font-bold">৪৫,০০০ টাকা</p>
      </div>
      <div class="text-center p-4 bg-blue-50 rounded-2xl">
        <p class="text-blue-600 font-medium">BAO</p>
        <p class="text-2xl font-bold">২৮,০০০ টাকা</p>
      </div>
      <div class="text-center p-4 bg-purple-50 rounded-2xl">
        <p class="text-purple-600 font-medium">Other</p>
        <p class="text-2xl font-bold">১৫,০০০ টাকা</p>
      </div>
    </div>
  </div>

  <!-- Recent Transactions -->
  <div class="mt-8 bg-white rounded-2xl shadow p-6 card">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold">আজকের লেনদেন</h2>
      <button class="text-blue-600 hover:text-blue-700 font-medium">সব দেখুন →</button>
    </div>
    <table class="w-full">
      <thead>
        <tr class="border-b text-left text-gray-600">
          <th class="py-3">S.N</th>
          <th class="py-3">বিবরণ</th>
          <th class="py-3">পরিমাণ</th>
          <th class="py-3">খাত</th>
          <th class="py-3">মোড</th>
        </tr>
      </thead>
      <tbody class="text-gray-700">
        <tr class="border-b">
          <td class="py-3">01</td>
          <td>Conference Fee</td>
          <td class="font-semibold text-green-600">+১০,০০০</td>
          <td><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Conference</span></td>
          <td>Bank</td>
        </tr>
        <tr class="border-b">
          <td class="py-3">02</td>
          <td>Shop Purchase</td>
          <td class="font-semibold text-red-600">-৫,৫০০</td>
          <td><span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-sm">Shop</span></td>
          <td>Cash</td>
        </tr>
        <tr>
          <td class="py-3">03</td>
          <td>Hospital Fund</td>
          <td class="font-semibold text-red-600">-২০,০০০</td>
          <td><span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Hospital</span></td>
          <td>Bank</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Action Buttons -->
  <div class="mt-8 flex flex-wrap gap-4 justify-center">
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-semibold text-lg flex items-center gap-2 shadow-lg">
      <i class="fas fa-plus"></i> নতুন লেনদেন
    </button>
    <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-2xl font-semibold text-lg flex items-center gap-2 shadow-lg">
      <i class="fas fa-chart-bar"></i> রিপোর্ট
    </button>
    <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-4 rounded-2xl font-semibold text-lg flex items-center gap-2 shadow-lg">
      <i class="fas fa-book"></i> Ledger
    </button>
  </div>

</div>

</body>
</html>
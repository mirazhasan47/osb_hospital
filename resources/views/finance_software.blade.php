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

  <!-- Main Unified Table -->
  <div class="bg-white rounded-2xl shadow card overflow-hidden">
    <div class="px-6 py-5 border-b bg-gray-50 flex justify-between items-center">
      <h2 class="text-2xl font-semibold">সম্পূর্ণ আর্থিক সারাংশ</h2>
      <button onclick="addNewTransaction()" 
              class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-medium flex items-center gap-2">
        <i class="fas fa-plus"></i> নতুন লেনদেন
      </button>
    </div>

    <table class="w-full">
      <thead class="bg-gray-100">
        <tr>
          <th class="py-5 px-6 text-left font-medium">বিভাগ</th>
          <th class="py-5 px-6 text-left font-medium">বিবরণ</th>
          <th class="py-5 px-6 text-right font-medium">পরিমাণ</th>
          <th class="py-5 px-6 text-center font-medium">স্ট্যাটাস</th>
          <th class="py-5 px-6 text-center font-medium">অ্যাকশন</th>
        </tr>
      </thead>
      <tbody class="divide-y text-gray-700">

        <!-- Summary Row -->
        <tr class="bg-green-50">
          <td class="py-5 px-6 font-semibold">মোট আয়</td>
          <td class="py-5 px-6">Total Income</td>
          <td class="py-5 px-6 text-right font-bold text-green-700">১,৮৫,০০০ টাকা</td>
          <td class="py-5 px-6 text-center">✅</td>
          <td class="py-5 px-6 text-center text-blue-600 cursor-pointer hover:underline" onclick="showModal('income')">বিস্তারিত</td>
        </tr>

        <tr class="bg-red-50">
          <td class="py-5 px-6 font-semibold">মোট ব্যয়</td>
          <td class="py-5 px-6">Total Expense</td>
          <td class="py-5 px-6 text-right font-bold text-red-700">- ১,৫৩,০০০ টাকা</td>
          <td class="py-5 px-6 text-center">✅</td>
          <td class="py-5 px-6 text-center text-blue-600 cursor-pointer hover:underline" onclick="showModal('expense')">বিস্তারিত</td>
        </tr>

        <tr class="bg-blue-50 font-semibold">
          <td class="py-5 px-6">নেট ব্যালেন্স</td>
          <td class="py-5 px-6">Net Balance</td>
          <td class="py-5 px-6 text-right text-blue-700">৩২,০০০ টাকা</td>
          <td class="py-5 px-6 text-center">✅</td>
          <td></td>
        </tr>

        <!-- Cash in Hand -->
        <tr>
          <td class="py-5 px-6 font-medium">ক্যাশ ইন হ্যান্ড</td>
          <td class="py-5 px-6">Cash Denomination</td>
          <td class="py-5 px-6 text-right font-bold text-green-600">৩২,০৮০ টাকা</td>
          <td class="py-5 px-6 text-center">💵</td>
          <td class="py-5 px-6 text-center">
            <button onclick="showCashModal()" class="text-blue-600 hover:text-blue-700 font-medium">দেখুন</button>
          </td>
        </tr>

        <!-- Bank Balance -->
        <tr>
          <td class="py-5 px-6 font-medium">ব্যাংক ব্যালেন্স</td>
          <td class="py-5 px-6">সোনালী, রূপালী, অগ্রণী ইত্যাদি</td>
          <td class="py-5 px-6 text-right font-bold">৪,২৫,০০০ টাকা</td>
          <td class="py-5 px-6 text-center">🏦</td>
          <td class="py-5 px-6 text-center">
            <button onclick="showBankModal()" class="text-blue-600 hover:text-blue-700 font-medium">দেখুন</button>
          </td>
        </tr>

        <!-- Fund Transfer -->
        <tr>
          <td class="py-5 px-6 font-medium">ফান্ড ট্রান্সফার</td>
          <td class="py-5 px-6">Hospital, BAO, Other</td>
          <td class="py-5 px-6 text-right font-bold text-orange-600">৮৮,০০০ টাকা</td>
          <td class="py-5 px-6 text-center">↔️</td>
          <td class="py-5 px-6 text-center">
            <button onclick="showFundModal()" class="text-blue-600 hover:text-blue-700 font-medium">দেখুন</button>
          </td>
        </tr>

        <!-- Recent Transactions -->
        <tr>
          <td class="py-5 px-6 font-medium">আজকের লেনদেন</td>
          <td class="py-5 px-6">Conference, Shop, Hospital</td>
          <td class="py-5 px-6 text-right">৩টি এন্ট্রি</td>
          <td class="py-5 px-6 text-center">📋</td>
          <td class="py-5 px-6 text-center">
            <button onclick="showTransactionsModal()" class="text-blue-600 hover:text-blue-700 font-medium">দেখুন</button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>

  <!-- Action Buttons -->
  <div class="mt-10 flex flex-wrap gap-4 justify-center">
    <button onclick="addNewTransaction()" 
            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-semibold text-lg flex items-center gap-2 shadow-lg">
      <i class="fas fa-plus"></i> নতুন লেনদেন
    </button>
    <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-2xl font-semibold text-lg flex items-center gap-2 shadow-lg">
      <i class="fas fa-chart-bar"></i> পূর্ণ রিপোর্ট
    </button>
    <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-4 rounded-2xl font-semibold text-lg flex items-center gap-2 shadow-lg">
      <i class="fas fa-book"></i> Ledger
    </button>
  </div>
</div>

<!-- Modals -->
<div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-2xl max-w-lg w-full mx-4 max-h-[90vh] overflow-auto">
    <div class="p-6">
      <div class="flex justify-between items-center mb-6">
        <h3 id="modalTitle" class="text-2xl font-semibold"></h3>
        <button onclick="closeModal()" class="text-3xl leading-none text-gray-400 hover:text-gray-600">×</button>
      </div>
      <div id="modalContent" class="text-gray-700"></div>
    </div>
  </div>
</div>

<script>
function showModal(type) {
  const modal = document.getElementById('modal');
  const title = document.getElementById('modalTitle');
  const content = document.getElementById('modalContent');
  
  if(type === 'income') {
    title.textContent = "মোট আয়ের বিস্তারিত";
    content.innerHTML = `<p class="text-4xl font-bold text-green-600">১,৮৫,০০০ টাকা</p>`;
  } else if(type === 'expense') {
    title.textContent = "মোট ব্যয়ের বিস্তারিত";
    content.innerHTML = `<p class="text-4xl font-bold text-red-600">- ১,৫৩,০০০ টাকা</p>`;
  }
  modal.classList.remove('hidden');
}

function showCashModal() {
  const modal = document.getElementById('modal');
  const title = document.getElementById('modalTitle');
  const content = document.getElementById('modalContent');
  
  title.textContent = "ক্যাশ ডিনোমিনেশন";
  content.innerHTML = `
    <table class="w-full">
      <tr><td class="py-3">২০,০০০ টাকা</td><td class="text-right">১ পিস</td><td class="text-right font-bold">২০,০০০</td></tr>
      <tr><td class="py-3">১,৪০০ টাকা</td><td class="text-right">১ পিস</td><td class="text-right font-bold">১,৪০০</td></tr>
      <tr><td class="py-3">১০,৬৮০ টাকা</td><td class="text-right">১ পিস</td><td class="text-right font-bold">১০,৬৮০</td></tr>
    </table>
    <p class="mt-6 text-2xl font-bold text-green-600 text-center">মোট: ৩২,০৮০ টাকা</p>
  `;
  modal.classList.remove('hidden');
}

function showBankModal() {
  const modal = document.getElementById('modal');
  const title = document.getElementById('modalTitle');
  const content = document.getElementById('modalContent');
  
  title.textContent = "ব্যাংক ব্যালেন্স বিস্তারিত";
  content.innerHTML = `
    <table class="w-full divide-y">
      <tr><td class="py-3">সোনালী ব্যাংক</td><td class="text-right font-semibold">১,২৫,০০০</td></tr>
      <tr><td class="py-3">রূপালী ব্যাংক</td><td class="text-right font-semibold">৮৫,০০০</td></tr>
      <tr><td class="py-3">অগ্রণী ব্যাংক</td><td class="text-right font-semibold">৪৫,০০০</td></tr>
      <tr><td class="py-3">ন্যাশনাল ব্যাংক</td><td class="text-right font-semibold">৯০,০০০</td></tr>
      <tr><td class="py-3">PDR & CA</td><td class="text-right font-semibold">৮০,০০০</td></tr>
    </table>
    <p class="mt-6 text-xl font-bold text-center">মোট ব্যাংক: ৪,২৫,০০০ টাকা</p>
  `;
  modal.classList.remove('hidden');
}

function showFundModal() {
  const modal = document.getElementById('modal');
  const title = document.getElementById('modalTitle');
  const content = document.getElementById('modalContent');
  
  title.textContent = "ফান্ড ট্রান্সফার";
  content.innerHTML = `
    <table class="w-full">
      <tr><td class="py-3">Hospital</td><td class="text-right font-semibold text-orange-600">৪৫,০০০ টাকা</td></tr>
      <tr><td class="py-3">BAO</td><td class="text-right font-semibold text-blue-600">২৮,০০০ টাকা</td></tr>
      <tr><td class="py-3">Other</td><td class="text-right font-semibold text-purple-600">১৫,০০০ টাকা</td></tr>
    </table>
  `;
  modal.classList.remove('hidden');
}

function showTransactionsModal() {
  const modal = document.getElementById('modal');
  const title = document.getElementById('modalTitle');
  const content = document.getElementById('modalContent');
  
  title.textContent = "আজকের লেনদেন";
  content.innerHTML = `
    <table class="w-full">
      <tr><td class="py-3">01</td><td>Conference Fee</td><td class="text-right text-green-600">+১০,০০০</td></tr>
      <tr><td class="py-3">02</td><td>Shop Purchase</td><td class="text-right text-red-600">-৫,৫০০</td></tr>
      <tr><td class="py-3">03</td><td>Hospital Fund</td><td class="text-right text-red-600">-২০,০০০</td></tr>
    </table>
  `;
  modal.classList.remove('hidden');
}

function closeModal() {
  document.getElementById('modal').classList.add('hidden');
}

function addNewTransaction() {
  alert("নতুন লেনদেন এন্ট্রি ফর্ম খুলবে (আপনি পরে এখানে ফর্ম যোগ করতে পারবেন)");
}
</script>

</body>
</html>
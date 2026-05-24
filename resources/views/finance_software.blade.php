<!DOCTYPE html>
<html lang="bn">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Financial Dashboard</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <style>
    body {
      font-family: 'Inter', system-ui, sans-serif;
      background: #f3f6fb;
    }

    .dashboard-card {
      transition: all .3s ease;
    }

    .dashboard-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.12);
    }

    .glass {
      backdrop-filter: blur(10px);
    }
  </style>
</head>

<body>

  <div class="max-w-7xl mx-auto p-6">

    <!-- Header -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-8 gap-6">

      <!-- Left Side -->
      <div>
        <h1 class="text-4xl font-extrabold text-gray-800">
         OSB Financial Dashboard
        </h1>

        <p class="text-gray-500 mt-2 text-lg">
          অ্যাকাউন্টিং ও রেকর্ড কিপিং সিস্টেম
        </p>
      </div>

      <!-- Center Month -->
      <div class="text-center flex-1">
        <h2 class="text-3xl font-bold text-blue-600">
          মে ২০২৬
        </h2>
      </div>

      <!-- Right Date Card -->
      <div class="bg-white rounded-2xl shadow-md px-6 py-4 text-center lg:text-right min-w-[220px]">

        <p class="text-lg font-semibold text-gray-800">
          ১৩ মে ২০২৬
        </p>

        <p class="text-sm text-gray-500 mt-1">
          বুধবার, ০১:১১ PM
        </p>

      </div>

      <button
        class="relative inline-flex items-center justify-center px-8 py-3 overflow-hidden font-semibold text-white transition-all duration-300 rounded-2xl bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 shadow-lg hover:scale-105 hover:shadow-2xl active:scale-95">
        <span class="absolute inset-0 bg-white opacity-0 hover:opacity-10 transition-opacity duration-300"></span>

        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15 12H3m0 0l4-4m-4 4l4 4m13-9v10a2 2 0 01-2 2h-5a2 2 0 01-2-2V7a2 2 0 012-2h5a2 2 0 012 2z" />
        </svg>

        Login
      </button>

    </div>

    <!-- Top Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

      <!-- Income -->
      <div class="dashboard-card bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl p-6 text-white shadow-xl">

        <div class="flex justify-between items-start">
          <div>
            <p class="text-white/80 text-sm">
              মোট আয়
            </p>

            <h2 class="text-3xl font-bold mt-3">
              ৳ ১,৮৫,০০০
            </h2>
          </div>

          <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center text-2xl">
            <i class="fas fa-arrow-trend-up"></i>
          </div>
        </div>

        <button onclick="showModal('income')"
          class="mt-6 bg-white text-green-700 font-semibold px-4 py-2 rounded-xl hover:bg-gray-100">
          বিস্তারিত দেখুন
        </button>

      </div>

      <!-- Expense -->
      <div class="dashboard-card bg-gradient-to-br from-red-500 to-rose-600 rounded-3xl p-6 text-white shadow-xl">

        <div class="flex justify-between items-start">
          <div>
            <p class="text-white/80 text-sm">
              মোট ব্যয়
            </p>

            <h2 class="text-3xl font-bold mt-3">
              ৳ ১,৫৩,০০০
            </h2>
          </div>

          <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center text-2xl">
            <i class="fas fa-arrow-trend-down"></i>
          </div>
        </div>

        <button onclick="showModal('expense')"
          class="mt-6 bg-white text-red-700 font-semibold px-4 py-2 rounded-xl hover:bg-gray-100">
          বিস্তারিত দেখুন
        </button>

      </div>

      <!-- Net Balance -->
      <div class="dashboard-card bg-gradient-to-br from-blue-500 to-indigo-600 rounded-3xl p-6 text-white shadow-xl">

        <div class="flex justify-between items-start">
          <div>
            <p class="text-white/80 text-sm">
              নেট ব্যালেন্স
            </p>

            <h2 class="text-3xl font-bold mt-3">
              ৳ ৩২,০০০
            </h2>
          </div>

          <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center text-2xl">
            <i class="fas fa-wallet"></i>
          </div>
        </div>

        <div class="mt-6 text-sm bg-white/10 rounded-xl p-3">
          বর্তমান আর্থিক অবস্থা স্থিতিশীল
        </div>

      </div>

      <!-- Transactions -->
      <div class="dashboard-card bg-gradient-to-br from-purple-500 to-fuchsia-600 rounded-3xl p-6 text-white shadow-xl">

        <div class="flex justify-between items-start">
          <div>
            <p class="text-white/80 text-sm">
              আজকের লেনদেন
            </p>

            <h2 class="text-3xl font-bold mt-3">
              ৩ টি
            </h2>
          </div>

          <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center text-2xl">
            <i class="fas fa-receipt"></i>
          </div>
        </div>

        <button onclick="showTransactionsModal()"
          class="mt-6 bg-white text-purple-700 font-semibold px-4 py-2 rounded-xl hover:bg-gray-100">
          লেনদেন দেখুন
        </button>

      </div>

    </div>

    <!-- Middle Cards -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">

      <!-- Cash -->
      <div class="dashboard-card bg-white rounded-3xl shadow-lg p-6">

        <div class="flex items-center justify-between">

          <div>
            <p class="text-gray-500 text-sm">
              ক্যাশ ইন হ্যান্ড
            </p>

            <h2 class="text-3xl font-bold text-green-600 mt-2">
              ৳ ৩২,০৮০
            </h2>
          </div>

          <div class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center text-green-600 text-3xl">
            💵
          </div>

        </div>

        <button onclick="showCashModal()"
          class="mt-6 w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-2xl font-semibold">
          ক্যাশ বিস্তারিত
        </button>

      </div>

      <!-- Bank -->
      <div class="dashboard-card bg-white rounded-3xl shadow-lg p-6">

        <div class="flex items-center justify-between">

          <div>
            <p class="text-gray-500 text-sm">
              ব্যাংক ব্যালেন্স
            </p>

            <h2 class="text-3xl font-bold text-blue-600 mt-2">
              ৳ ৪,২৫,০০০
            </h2>
          </div>

          <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center text-blue-600 text-3xl">
            🏦
          </div>

        </div>

        <button onclick="showBankModal()"
          class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-2xl font-semibold">
          ব্যাংক বিস্তারিত
        </button>

      </div>

      <!-- Fund -->
      <div class="dashboard-card bg-white rounded-3xl shadow-lg p-6">

        <div class="flex items-center justify-between">

          <div>
            <p class="text-gray-500 text-sm">
              ফান্ড ট্রান্সফার
            </p>

            <h2 class="text-3xl font-bold text-orange-600 mt-2">
              ৳ ৮৮,০০০
            </h2>
          </div>

          <div class="w-16 h-16 rounded-2xl bg-orange-100 flex items-center justify-center text-orange-600 text-3xl">
            ↔️
          </div>

        </div>

        <button onclick="showFundModal()"
          class="mt-6 w-full bg-orange-500 hover:bg-orange-600 text-white py-3 rounded-2xl font-semibold">
          ট্রান্সফার বিস্তারিত
        </button>

      </div>

    </div>

    <!-- Bottom Action Buttons -->
    <div class="mt-10 flex flex-wrap gap-5 justify-center">

      <button onclick="addNewTransaction()"
        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-semibold shadow-lg flex items-center gap-3">

        <i class="fas fa-plus"></i>
        নতুন লেনদেন

      </button>

      <button
        class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-2xl font-semibold shadow-lg flex items-center gap-3">

        <i class="fas fa-chart-column"></i>
        পূর্ণ রিপোর্ট

      </button>

      <button
        class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-4 rounded-2xl font-semibold shadow-lg flex items-center gap-3">

        <i class="fas fa-book"></i>
        Ledger

      </button>

    </div>

  </div>

  <!-- Modal -->
  <div id="modal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">

    <div class="bg-white rounded-3xl w-full max-w-xl shadow-2xl overflow-hidden">

      <div class="flex justify-between items-center px-6 py-5 border-b">

        <h3 id="modalTitle" class="text-2xl font-bold text-gray-800"></h3>

        <button onclick="closeModal()" class="w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-200 text-2xl">
          ×
        </button>

      </div>

      <!-- Wrapper for responsive table scroll inside modal -->
      <div class="overflow-x-auto p-6">
        <div id="modalContent" class="text-gray-700"></div>
      </div>

    </div>

  </div>

  <script>
    // reusable utility function to generate uniform tables inside modals
    function generateTableHTML(headers, rows, totalRow = null) {
      let html = `<table class="w-full text-left border-collapse min-w-[400px]">
        <thead>
          <tr class="border-b-2 border-gray-100 text-gray-500 text-sm uppercase font-semibold">`;

      headers.forEach(h => {
        html += `<th class="pb-3 px-2">${h}</th>`;
      });

      html += `</tr></thead><tbody class="divide-y divide-gray-50 text-gray-700">`;

      rows.forEach(row => {
        html += `<tr class="hover:bg-gray-50/50 transition-colors">`;
        row.forEach((cell, idx) => {
          // Add basic styling for text vs values
          const alignment = idx === row.length - 1 ? 'text-right' : '';
          html += `<td class="py-3 px-2 font-medium ${alignment}">${cell}</td>`;
        });
        html += `</tr>`;
      });

      html += `</tbody>`;

      if (totalRow) {
        html += `<tfoot>
          <tr class="font-bold border-t-2 border-gray-100 text-gray-800 bg-gray-50/50">
            <td class="py-3 px-2" colspan="${headers.length - 1}">${totalRow.label}</td>
            <td class="py-3 px-2 text-right">${totalRow.value}</td>
          </tr>
        </tfoot>`;
      }

      html += `</table>`;
      return html;
    }

    function showModal(type) {
      const modal = document.getElementById('modal');
      const title = document.getElementById('modalTitle');
      const content = document.getElementById('modalContent');

      if (type === 'income') {
        title.textContent = "মোট আয়ের বিস্তারিত";
        content.innerHTML = generateTableHTML(
          ["উৎস", "ক্যাটাগরি", "পরিমাণ"],
          [
            ["প্রজেক্ট ১", "ফ্রিল্যান্সিং", "৳ ১,২০,০০০"],
            ["কনসালটেন্সি", "সার্ভিস", "৳ ৪৫,০০০"],
            ["রয়্যালটি", "প্যাসিভ ইনকাম", "৳ ২০,০০০"]
          ],
          { label: "সর্বমোট আয়:", value: "৳ ১,৮৫,০০০" }
        );
      }
      else if (type === 'expense') {
        title.textContent = "মোট ব্যয়ের বিস্তারিত";
        content.innerHTML = generateTableHTML(
          ["খাত", "বিবরণ", "পরিমাণ"],
          [
            ["অফিস ভাড়া", "চলতি মাস", "৳ ৫০,০০০"],
            ["ইউটিলিটি বিল", "বিদ্যুৎ ও ইন্টারনেট", "৳ ১৩,০০০"],
            ["মার্কেটিং", "ফেসবুক অ্যাডস", "৳ ৯০,০০০"]
          ],
          { label: "সর্বমোট ব্যয়:", value: "৳ ১,৫৩,০০০" }
        );
      }

      modal.classList.remove('hidden');
    }

    function showCashModal() {
      document.getElementById('modal').classList.remove('hidden');
      document.getElementById('modalTitle').textContent = "ক্যাশ ডিটেইলস";

      document.getElementById('modalContent').innerHTML = generateTableHTML(
        ["নোটের ধরন", "সংখ্যা", "মোট টাকা"],
        [
          ["৳ ২০,০০০", "১ পিস", "৳ ২০,০০০"],
          ["৳ ১,৪০০", "১ পিস", "৳ ১,৪০০"],
          ["৳ ১০,৬৮০", "১ পিস", "৳ ১০,৬৮০"]
        ],
        { label: "সর্বমোট ক্যাশ:", value: "৳ ৩২,০৮০" }
      );
    }

    function showBankModal() {
      document.getElementById('modal').classList.remove('hidden');
      document.getElementById('modalTitle').textContent = "ব্যাংক ব্যালেন্স";

      document.getElementById('modalContent').innerHTML = generateTableHTML(
        ["ব্যাংকের নাম", "অ্যাকাউন্ট ধরন", "ব্যালেন্স"],
        [
          ["সোনালী ব্যাংক", "চলতি হিসাব", "৳ ১,২৫,০০০"],
          ["রূপালী ব্যাংক", "সঞ্চয়ী হিসাব", "৳ ৮৫,০০০"],
          ["অগ্রণী ব্যাংক", "ডিপিএস", "৳ ৪৫,০০০"],
          ["ন্যাশনাল ব্যাংক", "চলতি হিসাব", "৳ ৯০,০০০"]
        ],
        { label: "সর্বমোট ব্যাংক ব্যালেন্স:", value: "৳ ৪,২৫,০০০" }
      );
    }

    function showFundModal() {
      document.getElementById('modal').classList.remove('hidden');
      document.getElementById('modalTitle').textContent = "ফান্ড ট্রান্সফার";

      document.getElementById('modalContent').innerHTML = generateTableHTML(
        ["ফান্ড খাত", "স্ট্যাটাস", "পরিমাণ"],
        [
          ["Hospital", "<span class='text-orange-600 bg-orange-50 px-2 py-1 rounded-md text-xs font-semibold'>Pending</span>", "৳ ৪৫,০০০"],
          ["BAO", "<span class='text-green-600 bg-green-50 px-2 py-1 rounded-md text-xs font-semibold'>Completed</span>", "৳ ২৮,০০০"],
          ["Other", "<span class='text-green-600 bg-green-50 px-2 py-1 rounded-md text-xs font-semibold'>Completed</span>", "৳ ১৫,০০০"]
        ],
        { label: "মোট ট্রান্সফার:", value: "৳ ৮৮,০০০" }
      );
    }

    function showTransactionsModal() {
      document.getElementById('modal').classList.remove('hidden');
      document.getElementById('modalTitle').textContent = "আজকের লেনদেন";

      document.getElementById('modalContent').innerHTML = generateTableHTML(
        ["বিবরণ", "টাইপ", "পরিমাণ"],
        [
          ["Conference Fee", "<span class='text-green-600 font-bold'>+ আয়</span>", "৳ ১০,০০০"],
          ["Shop Purchase", "<span class='text-red-600 font-bold'>- ব্যয়</span>", "৳ ৫,৫০০"],
          ["Hospital Fund", "<span class='text-red-600 font-bold'>- ব্যয়</span>", "৳ ২০,০০০"]
        ]
      );
    }

    function closeModal() {
      document.getElementById('modal').classList.add('hidden');
    }

    function addNewTransaction() {
      alert("নতুন লেনদেন এন্ট্রি ফর্ম এখানে ওপেন হবে");
    }
  </script>

</body>

</html>
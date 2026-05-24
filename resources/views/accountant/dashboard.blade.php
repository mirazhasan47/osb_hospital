<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accountant Dashboard - Minimalist Ledger</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-50 font-sans text-slate-800 antialiased">

  <div class="flex min-h-screen">
    <!-- Sidebar Navigation -->
    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between p-6 shrink-0">
      <div>
        <!-- Brand Header -->
        <div class="flex items-center gap-3 mb-8 px-2">
          <div
            class="h-9 w-9 rounded-xl bg-blue-600 flex items-center justify-center font-bold text-white shadow-lg shadow-blue-500/20">
            A
          </div>
          <span class="font-bold text-lg text-white tracking-wide">LedgerBook</span>
        </div>

        <!-- Menu Item -->
        <nav class="space-y-1">
          <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-xl bg-blue-600 text-white font-medium transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
              </path>
            </svg>
            Monthly Income
          </a>
        </nav>
      </div>

      <!-- Profile Info Footer -->
      <div class="border-t border-slate-800 pt-4 px-2 flex items-center gap-3">
        <div
          class="h-8 w-8 rounded-full bg-slate-700 flex items-center justify-center text-xs font-bold text-slate-200 uppercase">
          AC
        </div>
        <div>
          <div class="text-sm font-semibold text-white">Accountant Panel</div>
          <div class="text-xs text-slate-500">Active Session</div>
        </div>
      </div>
    </aside>

    <!-- Main Workspace -->
    <main class="flex-1 p-8 lg:p-12 max-w-7xl mx-auto w-full">

      <!-- Sleek Dynamic Header Row -->
      <header
        class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 mb-12 border-b border-slate-200 pb-8">
        <div>
          <h1 class="text-3xl font-bold tracking-tight text-slate-900">Monthly Statements</h1>
          <p class="text-slate-500 mt-1">Review running operational metrics and income records.</p>
        </div>

        <!-- Action Layer: Trigger Entry Modal & Display Raw Totals -->
        <div class="flex items-center gap-4 self-stretch sm:self-auto">
          <div class="px-5 py-3 bg-slate-100 rounded-xl font-medium text-sm text-slate-700 hidden md:block">
            Current Aggregate: <span class="text-slate-900 font-bold ml-1">${{ number_format($totalSum, 2) }}</span>
          </div>

          <button onclick="openIncomeModal()"
            class="flex-1 sm:flex-initial flex items-center justify-center gap-2 px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition shadow-md shadow-blue-600/10 cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Record Income
          </button>
        </div>
      </header>

      <!-- Comprehensive Full-Width Ledger Component -->
      <section class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
          <div>
            <h3 class="text-lg font-bold text-slate-900">Income Log Ledger</h3>
            <p class="text-xs text-slate-400 mt-0.5">Formal entries filed during the active billing loop</p>
          </div>
          <div class="flex items-center gap-2 text-xs font-semibold px-3 py-1.5 bg-blue-50 text-blue-700 rounded-lg">
            <span class="h-1.5 w-1.5 rounded-full bg-blue-600 animate-pulse"></span>
            {{ $incomes->count() }} Entries Tracked
          </div>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full border-collapse text-left text-sm">
            <thead>
              <tr
                class="bg-slate-50 border-b border-slate-100 text-slate-400 font-semibold tracking-wide text-xs uppercase">
                <th class="px-6 py-4">Date Filed</th>
                <th class="px-6 py-4">Source of Income</th>
                <th class="px-6 py-4 text-right">Amount</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              @forelse($incomes as $income)
                <tr class="hover:bg-slate-50/30 transition duration-150">
                  <td class="px-6 py-4 text-slate-500 whitespace-nowrap">
                    {{ \Carbon\Carbon::parse($income->date)->format('F d, Y') }}
                  </td>
                  <td class="px-6 py-4 font-medium text-slate-900">
                    {{ $income->source }}
                  </td>
                  <td class="px-6 py-4 text-right font-semibold text-slate-900">
                    ${{ number_format($income->amount, 2) }}
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3" class="px-6 py-16 text-center text-slate-400">
                    <svg class="w-8 h-8 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                      </path>
                    </svg>
                    No explicit income sources have been recorded in the ledger yet.
                  </td>
                </tr>
              @endforelse
            </tbody>
            <tfoot>
              <tr class="bg-slate-900 text-white font-semibold">
                <td colspan="2" class="px-6 py-5 text-sm tracking-wide">Total Summary Balance</td>
                <td class="px-6 py-5 text-right text-lg text-emerald-400 font-bold tracking-tight">
                  ${{ number_format($totalSum, 2) }}
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </section>
    </main>
  </div>

  <!-- Modal Form Layer Overlay -->
  <div id="incomeModal"
    class="fixed inset-0 flex items-center justify-center bg-slate-950/40 backdrop-blur-xs z-50 opacity-0 pointer-events-none transition-all duration-300"
    onclick="outsideModalClick(event)">
    <!-- Modal Form Content Container -->
    <div id="incomeModalBox"
      class="relative w-[95%] max-w-lg p-8 bg-white rounded-2xl shadow-2xl border border-slate-100 transform scale-95 transition duration-300">
      <!-- Close Modal Action -->
      <button onclick="closeIncomeModal()"
        class="absolute top-4 right-5 text-2xl text-slate-400 hover:text-slate-900 transition cursor-pointer">
        &times;
      </button>

      <div class="mb-6">
        <h3 class="text-xl font-bold text-slate-900">Record Monthly Income</h3>
        <p class="text-sm text-slate-400 mt-0.5">File an official stream tracking segment into the ledger.</p>
      </div>

      <form action="{{ route('accountant.income.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
          <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Source of
            Income</label>
          <input type="text" name="source" placeholder="e.g., Enterprise Software Licensing"
            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-hidden focus:ring-2 focus:ring-blue-500 focus:bg-white transition"
            required />
        </div>

        <div>
          <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Amount ($)</label>
          <input type="number" step="0.01" name="amount" placeholder="0.00"
            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-hidden focus:ring-2 focus:ring-blue-500 focus:bg-white transition"
            required />
        </div>

        <div>
          <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-1.5">Statement
            Date</label>
          <input type="date" name="date" value="{{ date('Y-m-d') }}"
            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-hidden focus:ring-2 focus:ring-blue-500 focus:bg-white transition"
            required />
        </div>

        <div class="flex items-center gap-3 pt-2">
          <button type="button" onclick="closeIncomeModal()"
            class="flex-1 py-3 px-4 text-sm font-semibold text-slate-500 bg-slate-100 hover:bg-slate-200 rounded-xl transition cursor-pointer">
            Cancel
          </button>
          <button type="submit"
            class="flex-1 py-3 px-4 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-xl transition shadow-xs cursor-pointer">
            Save Entry
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal State Control Script -->
  <script>
    const incomeModal = document.getElementById("incomeModal");
    const incomeModalBox = document.getElementById("incomeModalBox");

    function openIncomeModal() {
      incomeModal.classList.remove("opacity-0", "pointer-events-none");
      incomeModalBox.classList.remove("scale-95");
      incomeModalBox.classList.add("scale-100");
    }

    function closeIncomeModal() {
      incomeModal.classList.add("opacity-0", "pointer-events-none");
      incomeModalBox.classList.add("scale-95");
      incomeModalBox.classList.remove("scale-100");
    }

    function outsideModalClick(e) {
      if (e.target === incomeModal) closeIncomeModal();
    }

    // Global ESC key event
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") closeIncomeModal();
    });
  </script>

</body>

</html>
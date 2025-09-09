<div x-data="{ open: false }" class="container mx-auto px-4 py-6">
    <!-- SLA 모달 열기 버튼 -->
    <button @click="open = true"
            class="px-6 py-2 bg-brand-600 text-white rounded-lg hover:bg-brand-700 transition">
    SLA 보기
    </button>

    <!-- 모달 배경 -->
    <div x-show="open" x-transition.opacity
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
        @click.self="open = false"
        x-cloak
    >

    <!-- 모달 내용 -->
    <div x-show="open" x-transition
        class="relative bg-white dark:bg-gray-900 rounded-xl shadow-lg w-full max-w-3xl mx-2 sm:mx-0 sm:p-6 overflow-y-auto max-h-[90vh]">

        <!-- 닫기 버튼 -->
        <button @click="open = false"
                class="absolute top-4 right-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 text-lg">
        ✕
        </button>

        <!-- 모달 헤더 -->
        <header class="text-center mb-6 mt-6 sm:mt-0">
        <h1 class="text-3xl font-bold mb-1">B2B 블로그 서비스 SLA</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400">서비스 수준 계약서 (Service Level Agreement)</p>
        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">버전 1.0 | 작성일: YYYY-MM-DD</p>
        </header>

        <!-- 모달 본문 -->
        <section class="space-y-4 px-2 sm:px-0">
        <div>
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">1. 계약 당사자</h2>
            <p>서비스 제공자: <span class="font-medium">[회사명]</span>, 대표 <span class="font-medium">[대표자명]</span></p>
            <p>고객: <span class="font-medium">[고객사명]</span>, 담당자 <span class="font-medium">[담당자명]</span></p>
        </div>

        <div>
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">2. 서비스 수준</h2>
            <p>서비스 가용성: 99.9%</p>
            <p>장애 응답: 업무일 기준 최장 7일</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">3. 기타 조항</h2>
            <p>계약 조건, 데이터 보호, 책임 범위 등</p>
        </div>
        </section>
        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">1. 계약 당사자</h2>
            <p>서비스 제공자: <span class="font-medium">[회사명]</span>, 대표 <span class="font-medium">[대표자명]</span></p>
            <p>고객: <span class="font-medium">[고객사명]</span>, 담당자 <span class="font-medium">[담당자명]</span></p>
        </section>

        
        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">2. 서비스 대상</h2>
            <ul class="list-disc list-inside space-y-1">
                <li>B2B 블로그 플랫폼</li>
                <li>구독 단위: 월간, 6개월, 1년</li>
                <li>결제: Toss 결제 시스템 연동</li>
                <li>고객 유형: 법인 및 개인사업자 (세금계산서 발행 가능)</li>
            </ul>
        </section>

        
        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">3. 서비스 가용성</h2>
            <table class="w-full text-left border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">구분</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">목표 가용성</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">전체 서비스</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">99.9% / 월 기준</td>
                    </tr>
                </tbody>
            </table>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">계산 방식: (서비스 제공 시간 - 장애 시간) / 서비스 제공 시간 × 100</p>
        </section>

        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">4. 장애 정의 및 등급</h2>
            <table class="w-full text-left border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">등급</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">정의</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">영향</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Critical</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">서비스 전체 중단, 다수 고객 업무 불가</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">최우선 대응</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Major</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">일부 기능 불가, 업무 영향</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">신속 대응</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Minor</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">기능 일부 오류, 업무 진행 가능</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">표준 대응</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">5. 장애 대응 및 해결 기준</h2>

            <h3 class="font-semibold mt-2">5.1 대응 시작 시간</h3>
            <table class="w-full text-left border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">등급</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">대응 시작 시간</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Critical</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">접수 후 4시간 이내</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Major</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">접수 후 1영업일 이내</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Minor</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">접수 후 3영업일 이내</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="font-semibold mt-2">5.2 장애 해결 목표</h3>
            <table class="w-full text-left border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">등급</th>
                        <th class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">해결 목표</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Critical</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">1영업일 이내</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Major</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">3영업일 이내</td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800">
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">Minor</td>
                        <td class="px-4 py-2 border-b border-gray-300 dark:border-gray-700">최장 7영업일 이내</td>
                    </tr>
                </tbody>
            </table>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">⚠️ 업무일 기준 (월~금, 공휴일 제외)</p>
        </section>

        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">6. 결제 및 세금계산서</h2>
            <ul class="list-disc list-inside space-y-1">
                <li>결제 수단: Toss 결제 시스템</li>
                <li>결제 주기: 월간 / 6개월 / 1년</li>
                <li>세금계산서 발행:
                    <ul class="list-disc list-inside ml-5">
                        <li>개인사업자 및 법인 고객 모두 가능</li>
                        <li>결제 완료 후 자동 또는 수동 발행</li>
                        <li>전자세금계산서 연동 가능 (Toss + ERP 연동 등)</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">7. 고객 의무</h2>
            <ul class="list-disc list-inside space-y-1">
                <li>장애 발생 시 정확한 정보 제공</li>
                <li>로그, 스크린샷 등 자료 제공</li>
                <li>제3자 서비스(Toss, 클라우드 등) 문제 시 협조</li>
            </ul>
        </section>

        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">8. SLA 제외 사항</h2>
            <ul class="list-disc list-inside space-y-1">
                <li>천재지변, 정부 규제, 전쟁 등 불가항력</li>
                <li>고객 내부 시스템 문제</li>
                <li>제3자 서비스 장애</li>
            </ul>
        </section>

        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">9. SLA 보상 정책</h2>
            <p>SLA 미달 시, 구독 요금 일부 환불 또는 서비스 크레딧 제공 가능</p>
            <p>구체적인 비율은 별도 계약서에서 규정</p>
        </section>

        <section class="space-y-2">
            <h2 class="text-xl font-semibold border-b border-gray-300 dark:border-gray-700 pb-1">10. 변경 및 통지</h2>
            <p>SLA 변경 시 최소 30일 사전 통지</p>
            <p>양측 합의 후 변경 가능</p>
        </section>
    </div>
    </div>
</div>
@extends('layouts.app')

@section('content')
<section class="ls ms text-sm-left text-center s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60 c-gutter-60">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10">
                <img class="rounded" src="/images/services/service1.jpg" alt="">
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <h2 class="special-heading text-sm-left text-center">
                    <span class="text-capitalize">
                        Oil and Gas Trading
                        <br>
                    </span>
                </h2>
                <h4>
                    Welcome to Opti Energy
                </h4>
                <div class="divider-25"></div>
                <p>
                    At Opti Energy, we are committed to excellence in oil and gas trading services,
                    delivering value to our clients through innovation, integrity, and expertise. Our
                    comprehensive range of services ensures that we meet your every need in the
                    energy trading sector.
                </p>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6 col-12 col-xl-5">
                <div class="divider-30 hidden-above-lg"></div>
                <h3 class="special-heading text-sm-left text-center">
                    <span class="text-capitalize">
                        1. Trading Expertise:
                    </span>
                </h3>
                <div class="divider-25"></div>
                <ul class="list-styled">
                    <li>Crude Oil Trading: Our team of experts excels in the trading of crude oil,
                        leveraging market insights and risk management strategies to maximize
                        returns.</li>
                    <li>Natural Gas Trading: We navigate the complexities of natural gas markets,
                        optimizing supply chains and pricing structures for our clients.</li>
                    <li>Petroleum Products: From refined fuels to petrochemicals, we facilitate
                        efficient trade transactions to meet your specific product requirements.</li>
                </ul>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6 col-12 col-xl-5">
                <div class="divider-30 hidden-above-lg"></div>
                <h3 class="special-heading text-sm-left text-center">
                    <span class="text-capitalize">
                        2. Risk Management:
                    </span>
                </h3>
                <div class="divider-25"></div>
                <ul class="list-styled">
                    <li>Market Analysis: Our seasoned analysts provide real-time market insights in
                        the oil and gas sector, empowering you to make informed decisions and
                        mitigate risks.</li>
                    <li>Risk Mitigation Strategies: We develop customized risk mitigation strategies
                        tailored to your unique exposure and objectives in the physical oil and gas
                        trading markets.</li>
                </ul>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6 col-12 col-xl-5">
                <div class="divider-30 hidden-above-lg"></div>
                <h3 class="special-heading text-sm-left text-center">
                    <span class="text-capitalize">
                        3. Logistics and Transportation:
                    </span>
                </h3>
                <div class="divider-25"></div>
                <ul class="list-styled">
                    <li>Global Network: Leveraging our extensive network, we ensure the seamless
                        movement of energy resources, reducing costs and optimizing delivery
                        schedules.</li>
                    <li>Storage Solutions: We offer strategic storage options, guaranteeing security
                        and accessibility for your energy assets.</li>
                </ul>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6 col-12 col-xl-5">
                <div class="divider-30 hidden-above-lg"></div>
                <h3 class="special-heading text-sm-left text-center">
                    <span class="text-capitalize">
                        4. Regulatory Compliance:
                    </span>
                </h3>
                <div class="divider-25"></div>
                <ul class="list-styled">
                    <li>Legal Expertise: Our legal team ensures full compliance with Hong Kong and
                        international energy trading regulations, safeguarding your operations.</li>
                    <li>Environmental Responsibility: We are committed to sustainable energy
                        practices, adhering to environmental standards and promoting responsible
                        energy trading.</li>
                </ul>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6 col-12 col-xl-5">
                <div class="divider-30 hidden-above-lg"></div>
                <h3 class="special-heading text-sm-left text-center">
                    <span class="text-capitalize">
                        5. Client-Centric Approach:
                    </span>
                </h3>
                <div class="divider-25"></div>

                <ul class="list-styled">
                    <li>Tailored Solutions: We understand that every client has unique needs. Our
                        team works closely with you to develop personalized solutions that align with
                        your goals.</li>
                    <li>Customer Support: Our dedicated customer support team is available around
                        the clock to address your inquiries and concerns promptly.</li>
                </ul>
                </p>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            </div>
        </div>
        
            {{-- <div class="col-12 col-xl-10 offset-xl-1">
                <div id="accordion01" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse01_header">
                            <h5>
                                <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                    How Do We Conduct Shipping?
                                </a>
                            </h5>
                        </div>

                        <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                            <div class="card-body">
                                Our team has been gelpingclients throughout the country for 10 years lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    Can I Pay After Receiving An Order?
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                Our team has been gelpingclients throughout the country for 10 years lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    Contacting The Sales Department
                                </a>
                            </h5>
                        </div>
                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">
                                Our team has been gelpingclients throughout the country for 10 years lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection
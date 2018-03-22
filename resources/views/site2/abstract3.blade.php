@extends('site2.abstract')

@section("docs-content")
<div>
    <!--Network-->
    <h1 id="Network">Network</h1>
    <p>
        Network connectivity will eventually be accessible without barrier.
    </p>

    <!--Role of Network-->
    <br>
    <h3 id="RoleofNetwork">Role of Network</h3>
    <p>
        At Brahma OS's network layer, we ensure network connectivity and autonomous economic construction by separating different roles.
        Here, we will distinguish the Meta-network nodes and routing network nodes.
    </p>

    <br>
    <h3 id="ConstructionofMetaNetwork">Construction of Meta-Network</h3>
    <p>
        Meta-Network is the smallest unit of a local area network.
    </p>
    <p>
        In the meta-network, different nodes are peer-to-peer with each other and do not need additional traffic costs.
        Therefore, the construction of meta- networks mainly occurs in a small area.
        The interconnection between devices at a short distance can be achieved directly through Bluetooth and other protocols.
    </p>
    <p>
        Brahma OS can be interconnected to build a meta-network and diffuse as a minimum unit.
        When sending data in the meta-network, the application layer protocol itself will do a lot of obfuscation measures,
        the data will be fragmented, encrypted to ensure that the data transmission in the meta- network will not leak data content.
    </p>

    <br>
    <!--Routing-->
    <h3 id="Routing">Routing</h3>
    <p>
        Routing connects to different meta-networks and connectivity to the upper WAN.
        Multiple routing can form a meta-network structure.
        They provide data exchange services between different meta-networks.
        Here can form a non-central traffic market.
    </p>
    <p>
        In Brahma OS, nodes connected to different meta-networks act as routing nodes,
        which provide traffic exchange between different meta-networks and interworking between meta-networks and wide-area networks.
        Therefore, the device as a routing node also obtains, to a certain extent, some economic return.
    </p>

    <br>
    <!--Application Basis-->
    <h1 id="ApplicationBasis">Application Basis</h1>
    <p>
        The purpose of Brahma OS with decentralized services is to provide a foundation for the above applications,
        so that D-App developers do not need to think too much about how to access decentralized services but to focus on how to construct application logic .
    </p>

    <br>
    <!--Runtime environment-->
    <h3 id="Runtimeenvironment">Runtime environment</h3>
    <p>
        The Brahma OS runtime environment runs as a sandboxed environment for Native D-App. We should ensure:
    </p>
    <ul>
        <li class="li_disc">Completely isolated</li>
        {{--bug--}}
        <li class="li_disc">Completely isolated</li>
        <li class="li_disc">decentralized component of the call environment</li>
    </ul>

    <p>
        Complete isolation provides safe running space for D-App.
        The security here is not only that the data of a single App itself cannot be infringed,
        but also that the operation with other App is isolated from each other.
    </p>

    <p>
        As a Native App, the efficiency of execution is crucial,
        which is directly related to the quality of the user experience.
        At the system's priority level,
        Brahma OS preempts transactions related to user interaction while network-IO-related execution runs in parallel in the background.
    </p>

    <br>
    <!---->
    {{--bug--}}
    <h3 id="Applicationstructure">Application structure</h3>
    <p>
        The D-App above Brahma OS should include two key components: Brahma OS Services Components, UI Components.
    </p>

    <br>
    <!-- Decentralized Service Components -->
    <h3 id="DecentralizedServiceComponents">Decentralized Service Components</h3>
    <p>
        As mentioned above, many decentralized services above Ethereal are being introduced.
        For developers, how to interface with best practices is crucial.
        It affects not only development progress of D-App but also user's asset security or other issues.
    </p>
    <p>
        Therefore, Brahma OS is expected to provide developers with:n
    </p>
    <ul>
        <li class="li_disc">Components SDK for quick integration</li>
        <li class="li_disc">Rich documentation</li>
        <li class="li_disc">Best Practice Access Sample</li>
        <li class="li_disc">Actively involved developer community</li>
    </ul>

    <p>
        For example, when a user in a D-App needs to purchase an item using ETH,
        he no longer needs to go to the wallet to start a transaction. Instead,
        he directly calls Brahma OS's payment component in the game to display the requested payment for the user Specific information.
        User's perception will also change from the logic of the past to the use of payment logic.
        It brings possibilities for a wider range of scenarios for the use of cryptographic assets.
    </p>

    <br>
    <!---->
    <h3 id="D-AppStore">D-App Store</h3>
    <p>
        In addition to bringing a lot of technological breakthroughs,
        Brahma OS brings a huge possibility for next possible new ecology, D-App Store.
    </p>

    <p>
        Unlike App Store or Google Play, we do not expect DApp to be a centralized operator,
        but a decentralized market where users are directly involved in operations.
        Many new business models can be built on it. For example,
        the revenue of D-App may be related to the rating users or recommended users with any intermediate role to deprive D-App's revenue.
    </p>

    <p>
        Moreover, since user-identity data is no longer in different central systems,
        different D-apps can more human-based and personalized based on the same user identity.
        Developers can find users that meet their target audience by paying the D-App Store's recommender system,
        who not only receive payment directly (in fact, users think they did nothing but received a token),
        but also will promote the high conversion rate of D-App.
    </p>

    <br>
    <!-- Conclusion-->
    <h1 id="Conclusion"> Conclusion</h1>
    <p>
        Brahma OS is stepping into a whole new area which cryptocurrency has never touched before.
        It will act as a central role in connecting end-users to the blockchain network.
        It not only integrates many of the existing decentralized services but also provides
        its developers with an infrastructure and a complete ecosystem to quickly build applications.
        It shows an important advance in the exploration of blockchain technology.
    </p>
</div>

@endsection
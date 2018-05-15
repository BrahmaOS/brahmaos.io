@extends('site2.abstractzh')

@section("docs-content")
<div>
    <!-- Layered Design Architecture -->
    <h1 id="Architecture">Architecture</h1>

    <br>
    <h3 id="LayeredDesign">Layered Design</h3>

    <img src="/images/site2/9.jpg" alt="">

    <p>
        Brahma OS uses a layered design scheme to stratify Chain, Runtime, and Framework.
        Taking into account the Android native application compatibility issues,
        we separate the Virtual Machine so that Android App runtime environment and DApp runtime environment are entirely isolated and to ensure that,
        even if there is dangerous behavior, Android App cannot get DApp information.
    </p>

    <p>
        Brahma Virtual Machine (BVM) is specially designed for DApp in Brahma OS to run DApp and the associated Framework and Libraries.
    </p>

    <p>
        Brahma's main chain as a Chain Context is expected to serve as an intermediary role to connect other application chains (Ethereum, EOS, etc.) through Chain Relayer.
    </p>


    <br>
    <!-- Consensus algorithm -->
    <h3 id="Consensusalgorithm">Consensus algorithm</h3>
    <p>
        As an independent blockchain, Brahma OS Chain's consensus algorithm is crucial to security.
        Currently, we mainly consider two possible projects: DPoS and DAG.
    </p>

    <p>
        DPoS was originally proposed by Bytemaster and used in BitShares, Steemit and EOS.
        Its main features are higher TPS (TX per second) and lower consensus maintenance costs.
        In contrast to the PoW consensus competition mechanism,
        DPoS tend to reach a consensus with the collaboration of Witness node.
    </p>

    <p>
        DAG is a graph in graph theory. In the beginning,
        IOTA attempted to use DAG instead of the existing blockchain structure
        to provide a value delivery network by mathematical proof rather than by consensus mechanism.
        After IOTA, there are other projects such as Byteball DAG proposed improvements and applications.
        The main feature of DAGs is the ability to deal with transaction requests at higher concurrency
        because of no block structure and therefore, no limit to TPS.
    </p>


    <br>
    <!-- Compatibility and Security -->
    <h3 id="CompatibilityandSecurity"> Compatibility and Security</h3>
    <p>
        We believe that decentralized OS will eventually replace the current centralized OS.
        This process requires not only time and effort but also learning of users.
        At the beginning of the design, we would take both compatibility and security into consideration.
    </p>

    <p>
        The existing Android OS is relatively complete. Therefore we consider
        providing a runtime environment with Dalvik Virtual Machine for the existing
        App of Android while we work on the related products of Brahma OS (such as Brahma Virtual Machine and Brahma Chain).
    </p>

    <p>
        The end nodes in the meta-network can form a peer-to-peer network,
        that is, the nodes in any meta-network are offline and should not cause unreachable communication in the meta-network.
        This is not the core of our concern, as its connectivity problems are not hard to solve.
        The critical problem goes to the router.
    </p>

    <p>
        In this way, it guarantees the compatibility.
        At the same time, it isolates the interaction between the Android App and the DApp from the runtime level,
        thereby avoiding the possibility that the Android App can steal the key and information in the DApp.
    </p>

    <br>

    <!--Identity-->
    <h1 id="Identity"> Identity</h1>
    <p>

        Identity is the primary element in any system and the premise of
        logical interaction and functional interaction between man and machine.
    </p>
    <p>
        In Brahma OS, the identity is no longer dependent on the centralized service account system,
        but directly use the blockchain public key as the identity of the user identity,
        connecting the entire decentralized service system.
    </p>


    <br>
    <!-- About  -->
    <h3 id="AboutI">About "I"</h3>
    <p>
        The reason why we will abandon the centralized service account system,
        largely from our understanding of the identity of "I" in the entire network architecture.
    </p>

    <p>
        In the existing centralized account system, end users need to register with a centralized service provider to get a distributed identity.
        This identity authorizes the user to log in to the system for the follow-up operation. This brings a few questions:
    </p>

    <ul>
        <li class="li_disc">When switching between different account systems, the data of "I" do not interwork with each other</li>
        <li class="li_disc">"I" is redundant in different accounts and not mutually exclusive</li>
        <li class="li_disc">All factual data and user from the "I" act are easily obtained at no cost by a centralized service provider</li>
    </ul>

    <p>
        In summary, "I" is authorized to access in the existing centralized network
        and is unconditionally deprived of data.
    </p>
    <p>
        When an account leaked the password, the service provider was hacked or service providers sell user personal data, "I" becomes powerless.
    </p>

    <br>
    <!--  Role and Value of Identity -->
    <h3 id=" RoleandValueofIdentity">Role and Value of Identity</h3>
    <p>
        Based on our perception of "I", i.e. identity, we can find that identity, as an access token to the system,
        is linked to a set of business logic.The identities built on the central service providers are isolated, redundant, non- cross-linked and insecure. However, user's identity is a valuable resource and barrier in the current Internet economy. Therefore, returning the value of identity to the user is paramount for Brahma OS.
    </p>

    <p>
        Through the above description, we can see that identity in a complete system plays two roles:
    </p>

    <ul>
        <li class="li_disc">Get Account System Authorization</li>
        <li class="li_disc">Access to and operation of the account system's identity</li>
    </ul>

    <p>
        In Brahma OS, identities plays other roles:
    </p>

    <ul>
        <li class="li_disc">Asset identification</li>
        <li class="li_disc">AUser portrait</li>
        <li class="li_disc">User portrait D-App matches</li>
    </ul>

    <p>
        Brahma OS expects to offer users the opportunity to collect user factual data at the OS level and to train their AI for perfection of user portraits.
        When D-App needs to use these user portraits, it pays directly to the user to ensure that the final revenue belongs to the owner of the OS, not to any intermediate role.
    </p>

    <br>
    <!--Significance of Decentralized Storage-->
    <h3 id="SignificanceOfStorage">Significance of Decentralized Storage</h3>
    <p>
        Decentralized storage of user-related data can be more valuable than other centralized cloud storage.
    </p>

    <p>
        We talk about several disadvantages of centralized cloud storage:
    </p>
    <ul>
        <li class="li_disc">It exists systemic security risks in Centralized systems</li>
        <li class="li_disc">Cloud storage service providers do not share identity information</li>
        <li class="li_disc">Any centralized cloud storage service providers compromising will threaten other service providers</li>
    </ul>

    <p>
        At the beginning of designing the decentralized storage, we avoid such kind of problems.
        Even if the key is stolen due to personal or other reasons,
        the leakage of personal data will not cause the loss of other user data in the system.
    </p>

    <p>
        At the same time, user identity is no longer a source for commercial company to get information of users.
        All fees will go back to the user itself. The problem of requiring centralized storage and processing of user data was circumvented from the very beginning.
        Everyone holds their own data which distributed discretely in a decentralized storage network.
        No one (organization) can monitor the whereabouts and content of personal data or hijack user data.
        This will bring a lot of possibilities for personal data privacy, freedom of behavior and value return.
        it is the basis for reshaping the existing business model.
    </p>

</div>
@endsection
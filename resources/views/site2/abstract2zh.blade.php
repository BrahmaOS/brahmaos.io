@extends('site2.abstractzh')

@section("docs-content")
<div>
    <!-- Layered Design Architecture -->
    <h1 id="Architecture">架构</h1>

    <br>
    <h3 id="LayeredDesign">分层设计</h3>

    <img src="/images/site2/9.jpg" alt="">

    <p>
        Brahma OS  使用分层设计方案，将 Chain、Runtime、Framework
        等逐一分层。并且为了考虑到Android  原生应用的兼容性问题，从
        Virtual Machine  单独区分，从而使得 Android App 和 DApp  的运
        行时环境完全隔离，保证了 Android App  即便存在危险的行为也不
        能获取到 DApp  的信息。
    </p>

    <p>
        Brahma OS  为 DApp 独立设计了 Brahma Virtual Machine(BVM)，
        用于执行 DApp  的运行和关联的 Framework 和 Libraries  的运行。
    </p>

    <p>
        Brahma  独立的 Chain 作为 Brahma OS  的主链，起着  Chain
        Context(链间上下文)的作用，预期通过 Chain Relayer  作为中间角
        色，来连通其他的应用链（如 Ethereum，EOS  等）。
    </p>


    <br>
    <!-- Consensus algorithm -->
    <h3 id="Consensusalgorithm">共识算法</h3>
    <p>
        作为独立的区块链，Brahma OS Chain  的共识算法对于安全性至关
        重要，当前我们主要考虑采用两种可能的方案：DPoS  和 DAG。
    </p>

    <p>
        DPoS  由 Bytemaster 最初提出并在 BitShares、Steemit  及  EOS
        中应用，它主要的特点是较高的 TPS (TX per second)  和较低的共
        识维护成本，同时相比于 PoW 共识的竞争机制，DPoS  更倾向于
        Witness node  间合作的方式来达成共识。
    </p>

    <p>
        DAG  是图论中的一种图，IOTA 最初尝试使用 DAG  来替代已有的
        blockchain  结构，用于提供一种通过数学证明，而非共识机制保证
        的价值传输网络。在  IOTA
        之后，又有  Byteball
        等其他项目对
        DAG  提出了改进和应用。DAG 的主要特点在于可以更高并发的处
        理交易请求，因为没有了 block  结构，因此不存在 TPS 的限制。
    </p>


    <br>
    <!-- Compatibility and Security -->
    <h3 id="CompatibilityandSecurity"> 兼容性与安全性考虑</h3>
    <p>
        我们相信去中心化 OS  最终会替换掉当前的中心化 OS，但是这不仅
        仅需要时间和精力，还需要用户学习的过程，因此我们在设计之初，
        会坚固兼容性并考虑到安全性因素。
    </p>

    <p>
        因为已有的  Android
        OS
        已经相对完整，因此我们考虑在进行
        Brahma OS  相关内容研发的同时，如Brahma Virtual Machine、
        Brahma Chain  等，兼顾已有 Android OS  的运行，在 OS  层面提供
        Dalvik Virtual Machine  为 Android 已有的 App 提供运行时环境。
    </p>

    <p>
        这样，既保证了兼容性，又从运行时的层面直接隔离了  Android
        App 与 DApp  之间交互的可能性，从而避免了 Android App  窃取密
        钥、偷取 DApp  信息的可能性。
    </p>

    <br>

    <!--Identity-->
    <h1 id="Identity"> 身份</h1>
    <p>

        在任何系统中，身份都是不可规避的首要因素，也是人机进行逻辑、
        功能性交互的前提。
    </p>
    <p>
        Brahma OS  中，身份不再依赖于基于中心化服务的账号系统，而是
        直接使用区块链的公钥作为用户身份的标识，连接整个去中心化服务
        体系。
    </p>


    <br>
    <!-- About  -->
    <h3 id="AboutI">关于“我”</h3>
    <p>
        之所以会抛弃中心化服务的账号体系，很大程度上来源于我们对于
        “我”这一身份在整个网络架构中的认知。
    </p>

    <p>
        在现在已有的中心化账号体系中，终端用户需要在中心化的服务商那
        里进行注册，拿到一个分发的身份，授权用户登录到系统中，再进行
        后续操作。这带来几个问题（现在已经凸显）：
    </p>

    <ul>
        <li class="li_disc">在不同的账号系统间切换时，“我”的数据并不天然互通</li>
        <li class="li_disc">“我”在不同账号里是冗余且并不互备的</li>
        <li class="li_disc">“我”的行为产生的所有事实数据和用户画像被中心化的服务商无成本轻松获取</li>
    </ul>

    <p>
        以上几个问题总结来说就是，“我”在当前已有的中心化网络中是被授权访问，且无条件的在被剥夺行为数据。
    </p>
    <p>
        当一个账号泄漏了密码或服务商被黑客攻击，甚至是服务商贩卖用户个人数据时，“我”便变得对这件事情无能为力。
    </p>

    <br>
    <!--  Role and Value of Identity -->
    <h3 id=" RoleandValueofIdentity">身份的作用与价值体现</h3>
    <p>
        基于对于“我”，即身份，的认知我们不难发现，身份作为接入到系统
        的准入标识，背后关联着一整套的商业逻辑。
        而构建在中心服务商之上的身份，彼此之间是隔离、冗余、无交叉、
        不安全的，而用户身份又恰恰是当前互联网经济的重要资源和壁垒。
        所以，在 Brahma OS  中，如何将身份的价值回归给身份所有者本身
        便显得至关重要了。
    </p>

    <p>
        通过上面的阐述，可以知道，身份在一个完备的系统中起着两种作用：
    </p>

    <ul>
        <li class="li_disc">获取账户系统授权</li>
        <li class="li_disc">访问和操作账户系统的标识</li>
    </ul>

    <p>
        在Brahma OS中，身份还具有其他作用：
    </p>

    <ul>
        <li class="li_disc">资产的标识</li>
        <li class="li_disc">用户画像的标识</li>
        <li class="li_disc">D-App匹配用户画像的标识</li>
    </ul>

    <p>
        Brahma OS  预期提供给用户可选择机会，通过 OS 层面在本地收
        集用户的事实数据，并训练其本地 AI       进行用户画像的完善，当  D-
        App  的主体需要使用这些用户画像时，其直接支付费用给用户，确
        保最终收益归 OS  所有者本人，而非任何中间角色。
    </p>

    <br>
    <!--Significance of Decentralized Storage-->
    <h3 id="SignificanceOfStorage">去中心化存储的意义</h3>
    <p>
        相比于直接使用其他中心化的云存储方案，用户的身份相关数据使用
        去中心化存储会带来更大的价值。
    </p>

    <p>
        先说下使用中心化云存储方案的几个弊端：
    </p>
    <ul>
        <li class="li_disc">中心化系统存在系统性安全风险</li>
        <li class="li_disc">云存储服务商之间并不共享身份信息</li>
        <li class="li_disc">任何一个中心化云存储服务商被攻破都会威胁其他服务商</li>
    </ul>

    <p>
        而去中心化的存储方案，恰好在设计之初就规避这类问题。即便是单
        一用户因为个人行为或其他原因导致密钥被盗窃，带来个人数据的泄
        漏，也不会造成整个系统中其他用户数据的丢失，甚至于都不会产生
        丝毫的关联。
    </p>

    <p>
        同时，用户身份不再是被商业巨头榨取的来源。所有因为使用用户身
        份及画像支付的费用，都会回馈给用户本身。从一开始便规避了用户
        数据需要集中存储和处理的问题。每个人持有着自己的数据，离散的
        分布在去中心化存储的网络中，不再有人（机构）可以监视个人数据
        的去向、内容，也无法在中间劫持数据。
        这将为个人的数据隐私、行为自由、价值回归带来诸多的可能性，是
        重塑现有商业模式的基础。
    </p>

</div>
@endsection
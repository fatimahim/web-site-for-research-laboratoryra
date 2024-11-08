<style>
     h3 {
    color: #31968e;
    
    text-shadow: 1px 1px #000;
}
h4 {
    color: #31968e;
    
    text-shadow: 1px 1px #000;
}
h5 {
    
    color: #31968e;
    text-shadow: 1px 1px #000;
}
.bigger {
    font-family: "Arial Black, Gadget, sans-serif";
  font-size: 20px;
}

}
</style>
<br>
<br>
<p>
Le présent programme de recherche de l’équipe AIM se développera autour, à la fois, de la recherche fondamentale, ainsi que celle appliquée, avec une orientation beaucoup plus vers la dernière. L’équipe se focalise sur le développement des nouvelles méthodes (Deep Learning- Intelligence Artificielle etc.) pour l’automatisation de l’analyse, segmentation, classification, diagnostic et pronostic des données de l’imagerie médicale. Pendant les quatre années à venir, sur les axes de recherche suivants :
    <h3>Axe 1 :Détection et reconnaissance des anomalies à partir des images issues des endoscopies (capsule endoscopique sans fil).</h3>
    <h4>Description :</h4>
    En plus d'être le deuxième cancer digestif au Maroc après celui de l'estomac, le cancer colorectal est également l'une des premières causes de mortalité par cancer dans le monde. La détection des anomalies du côlon est l'une des tâches les plus difficiles pour les gastro- entérologues, l'endoscopie est la procédure médicale utilisée pour examiner les organes à l'intérieur du corps lorsque la partie du corps est le côlon et le rectum, nous devons utiliser la coloscopie qui produit une série de photos du côlon et du rectum. Afin d'apporter une aide aux médecins, la coloscopie peut être accompagnée d'un diagnostic assisté par ordinateur (CAD). Récemment, grâce à des modèles d'apprentissage en profondeur réussis dans le traitement d'images et vision par ordinateur, de nombreuses techniques de segmentation et de classification impliquant un apprentissage en profondeur ont vu le jour. Le potentiel de certains de ces modèles pour l'imagerie médicale est énorme. En particulier, les réseaux de neurones convolutifs sont très efficaces pour la classification et segmentation. La segmentation des images d'endoscopie vise à séparer la zone du polype (en tant que région d'intérêt) et à fournir une limite claire du polype. Les résultats démontrent que les modèles CNN profonds sont prometteurs dans ce domaine.
Le but du projet est d'analyser les images issues de la capsule et/ou coloscopie afin de détecter s'il y a des anomalies liées au cancer du côlon. Plus, les méthodes classiques qui décrivent les caractéristiques des anomalies, nous envisageons d’employer les modèles de l’apprentissage en profondeur. Des modèles tels que UNet, FPN, Resnet, DAF vont être exploité afin d’aboutir à des bons résultats.
<h4>Références :</h4>
1-Ellahyani, A., Jaafari, I.E., Charfi, S. and Ansari, M.E., 2022. Fine-tuned deep neural networks for polyp detection in colonoscopy images. Personal and Ubiquitous Computing, pp.1-13.<br>
2-Ellahyani, A., Jaafari, I.E., Charfi, S. and Ansari, M.E., 2021. Detection of abnormalities in wireless capsule endoscopy based on extreme learning machine. Signal, Image and Video Processing, 15(5), pp.877-884<br>
3-Charfi, S., El Ansari, M., Ellahyani, A. and El Jaafari, I., 2021. Preliminary results of red lesion segmentation in WCE images. In E3S Web of Conferences (Vol. 297, p. 01060). EDP Sciences.<br>
Haq, I.U., 2022. An overview of deep learning in medical imaging. arXiv preprint arXiv:2202.08546.<br>
<h3>Axe 2 : Détection, reconnaissance, traitement et analyse des images de mammographie.</h3>
<h4>Description </h4>
Le cancer du sein est la maladie la plus nocive pour les femmes. Les lésions mammaires sont définies comme bénignes ou malignes selon leur stade de cancer. Une détection précoce et une classification précise des lésions mammaires sont essentielles pour augmenter les taux de survie chez les femmes en particulier. Pour détecter et classer les lésions mammaires parmi le grand nombre de patientes, les experts en radiologie sont confrontés à des défis quotidiens en raison du temps et des efforts requis. De plus, les radiologues doivent examiner attentivement toutes les vues de mammographie (cranio-caudale (CC) et médio-latérale oblique (MLO)) de chaque sein pour rechercher d'éventuelles cellules tumorales. Récemment, des méthodologies d'apprentissage en profondeur ont été adoptées pour améliorer la précision de la détection et de la classification des lésions mammaires, devenant ainsi des éléments clés pour les systèmes de diagnostic assisté par ordinateur (CAD).
 
Dans cet axe, nous visons à améliorer les performances diagnostiques et aider efficacement les médecins à établir une analyse précise des lésions mammaires. D’où, notre principal objectif sera le d éveloppement des nouvelles méthodes basées sur l’apprentissage automatiques et l’apprentissage en profondeur afin d’automatiser l’analyse, segmentation, classification des lésions mammaires.
<h4>Références :</h4>
1-Kolchev, A., Pasynkov, D., Egoshin, I., Kliouchkin, I., Pasynkova, O. and Tumakov, D., 2022. YOLOv4-Based CNN Model versus Nested Contours Algorithm in the Suspicious Lesion Detection on the Mammography Image: A Direct Comparison in the Real Clinical Settings. Journal of Imaging, 8(4), p.88.<br>
2-Ueda, D., Yamamoto, A., Onoda, N., Takashima, T., Noda, S., Kashiwagi, S., Morisaki, T., Fukumoto, S., Shiba, M., Morimura, M. and Shimono, T., 2022. Development and validation of a deep learning model for detection of breast cancers in mammography from multi-institutional datasets. Plos one, 17(3), p.e0265751.<br>
<h3>Axe 3 :Détection du mélanome en utilisant les images dermoscopiques</h3>
<h4>Description : </h4>
Le cancer de la peau est considéré comme l'un des types de cancer les plus dangereux et les plus répandus. Le plus meurtrier forme de ce type de cancer est appelée mélanome. Ces tumeurs cancéreuses se forment à partir des cellules de la coloration de la peau. Si les mélanomes sont détectés tôt, ils peuvent être facilement traités. Par conséquent, le diagnostic immédiat de ce type de cancer de la peau est crucial. Actuellement, la dermoscopie est devenue l'un des outils les plus efficaces utilisés dans le diagnostic des lésions cutanées. En raison des frais de traitement de chaque patient par des dermatologues, un système de reconnaissance informatisé est fortement nécessaire pour évaluer l'état de chaque patient. L’ensemble de nos travaux visent à développer des techniques de vision par ordinateur pour l'analyse d'images médicales, en particulier pour la détection du cancer. L'étude se concentrera sur la détection des types de cancer les plus courants, à savoir le cancer de la peau et le cancer du poumon. On espère que les expériences passées et la technologie d'apprentissage en profondeur mèneront à une avancée réussie dans cette nouvelle ère de diagnostic assisté par ordinateur, permettant ainsi aux systèmes de diagnostic assisté par ordinateur de fournir des aides intelligentes pour améliorer les soins de santé.
 
Cet axe de recherche vise en particulier à automatiser le processus de classification des images dermoscopiques contenant de la peau lésions en bénignes ou malignes. Ainsi, les phases de détection, la reconnaissance et la classification invoquant les méthodes récentes de l’apprentissage profond (Deep Learning) vont être impliquées dans ce sujet.
<h6>Architecture :</h6> CNN, RNN, DBN etc.
<h4>Références :</h4>
Références :
Lafraxo, S., Ansari, M.E. and Charfi, S., 2022. MelaNet: an effective deep learning framework for melanoma detection using dermoscopic images. Multimedia Tools and Applications, 81(11), pp.16021-16045.
1- Popescu, D., El-Khatib, M., El-Khatib, H. and Ichim, L., 2022. New Trends in
Melanoma Detection Using Neural Networks: A Systematic Review. Sensors, 22(2), p.496. 
3- Lafraxo, S., Ansari, M.E.,2022. Regularized Convolutional Neural Network for Pneumonia Detection Trough Chest X-Rays. In book: Advanced Intelligent Systems for Sustainable
Development (AI2SD’2020), Volume 1. DOI: 10.1007/978-3-030-90633-7_76
<h3>Axe 4 :Analyse de l’échographie carotidienne.</h3>
<h4>Description :</h4>
L'athérosclérose est une maladie vasculaire caractérisée par l'épaississement de la paroi artérielle et la formation de plaques. Il constitue le principal mécanisme pathologique sous- jacent à l'AVC et à l'infarctus du myocarde, qui sont les principales causes de décès et d'incapacité permanente dans les pays développés encore plus dans les pays en développement. Le diagnostic précoce de la maladie est très important pour réduire les taux de morbidité. L’Échographie en mode B des artères, telles qu’en tant que partie extra- crânienne de la carotide, est devenue largement utilisé dans la pratique clinique pour le diagnostic de l'athérosclérose et les maladies associées, car il s'agit d'une technologie d’imagerie médicale à haute résolution, non invasive, peu coûteuse et facilement disponible. Cette méthode permet de calculer la distance entre la limite interne de l'adventice et la lumière, appelée intima-média épaisseurs (IMT), qui la mesure la plus utilisée comme marqueur de substitution de l'athérosclérose dans plusieurs études cliniques qui ont démontré leur capacité à prédire le risque futur d'événements vasculaires cliniques. Cette mesure nécessite des méthodes de segmentation complexe souvent calculée manuellement par les experts cliniques. La procédure prend beaucoup de temps ce qui réduit le nombre d’examens effectuer.
 
L’objectif de cette étude est de proposer une méthode automatique qui sert à extraire les contours du complexe intima media et mesurer le CIMT dans les images échographiques longitudinales CCA. Des approches récentes de l’apprentissage automatique vont être étudiées afin de les exploiter dans ce domaine. Plus précisément, nous visons a proposé une nouvelle méthode automatique/semi-automatique de segmentation.
<h4>Références :</h4>
1- Younes Kabbadj and Fakhita Regragui. A new clustering-based segmentation technique for breast lesions detection. Journal of Theoretical & Applied Information Technology, vol. 71, no. 3, 2015.
2- Younes Kabbadj, Fakhita Regragui and Mohammed Majid Himmi. Detection of microcalcifcation in digitized mammograms using weighted local differences and local contrast. Applied Mathematical Sciences, vol. 6, no. 131, pages 6533-6544, 2012.
<h3>Axe 5 :Détection des maladies de pneumonie et cardiaque. </h3>
L’objectif de cet axe de recherche est de détecter les différentes maladies qui touchent les poumons ainsi que le cœur. Ces types d’anomalies constituent un problème de santé publique important, car elles sont une cause majeure de morbidité et de mortalité chez l’adulte. Différentes modalités de l’imagerie médicale sont souvent utilisées pour le diagnostic dans ces domaines. A titre d’exemples, l’échographie cardiaque, la radiographie thoracique et les images X-ray.
Afin d'apporter une aide aux médecins et leur permettre d’effectuer plus d’examens aux patients, des méthodes automatiques de détection peuvent assister les médecins dans leurs prises de décision.
Dans ce contexte, l’objectif de nos travaux sera de développer des algorithmes de détection des maladies cardiaques/pneumonie à partir des images médicales issues des modalités mentionnées ci-dessus. Techniquement, les méthodes de l’apprentissage automatique et l’apprentissage profond seront étudiées afin de parvenir à des méthodes automatiques et efficaces, adaptées à ce domaine.
<h3>Axe 6: Artificial Intelligence based gastro-intestinal diseases detection for cancer prevention using video capsule endoscopy </h3>
<h4>1.CONTEXTE GÉNÉRAL DE LA THÉMATIQUE</h4>
L'endoscopie par capsule sans fil (WCE) est une technologie moderne et efficace pour diagnostiquer le tractus gastro-intestinal (GIT). Elle permet aux experts d'examiner à la fois la partie supérieure et la partie inférieure du tractus gastro-intestinal d'un patient, y compris l'œsophage, l'estomac, le duodénum, le côlon et l'iléon terminal.
Bien que la WCE présente de nombreux avantages, une amélioration supplémentaire de cette technologie est nécessaire. Actuellement, il est très difficile pour les cliniciens d'inspecter 50.000 images et de localiser avec précision les régions d’intérêt des anomalies (saignements, ulcères, polypes ...). Des zones d’intérêts potentiels peuvent échapper à la vigilance du clinicien en raison de la fatigue visuelle ou de la perte de concentration. Nous visons à développer un système de diagnostic assisté par ordinateur pour détecter les anomalies qui peuvent être transformées par la suite en cancer, et cela en faisant appel aux approches basées sur l'intelligence artificielle et ceux basées sur l’apprentissage profond (deep learning).
<h4>2. LES ASPECTS ORIGINAUX OU NOVATEURS RECHERCHES:</h4>
L'application des algorithmes de traitement d'images qui se basent sur le "Machine Learning" se trouve limitée en termes de performances. Dans ce sens, de nouveaux modèles basés sur le "Deep Learning" vont être développés.
<h4>3.OBJECTIFS </h4>
Ce projet a pour objectif de développer des approches de détection des anomalies en faisant appel aux approches de l'intelligence artificielle.
Comme application, le projet va viser les images collectées par les WCEs.
<h3>Axe 7: Recherche et Indexation des images médicales par contenu (Technique CBIR), basée sur l’apprentissage profond (Deep Learning)</h3>
<h4>1.CONTEXTE GÉNÉRAL DE LA THÉMATIQUE </h4>
Les systèmes médicaux produisent une grande quantité de données sous forme d’images numériques. Le développement exponentiel de la puissance de calcul des ordinateurs et des capacités de stockage a accentué la production de ces images.
Les images produites sont stockées sous différentes formes qui peuvent aller de la base de données structurées à des empilements de CD ROM.
Partant de ce constat, une difficulté majeure se présente. Elle concerne la recherche d’une information particulière et pertinente en un temps acceptable.
L’accès rapide à ces bases d’images volumineuses nécessite des algorithmes d’indexation efficaces.
<h4>2.LES ASPECTS ORIGINAUX OU NOVATEURS RECHERCHES :</h4>
Plusieurs systèmes d’indexation d’images ont été étudiés dans la littérature. Les plus classiques sont les systèmes basés sur le texte (Text Based Image Retrieval). Ces systèmes décrivent le contenu visuel sous forme textuelle (utilisation de mots-clés). Ces mots-clés servent comme index pour accéder aux données visuelles associées. L’avantage de cette approche est qu’elle permet de consulter les bases de données en utilisant les langages d’interrogation standard, par exemple SQL.
Les descripteurs textuels peuvent aboutir à des interprétations complètement différentes de la même image.
Plusieurs analyses de la même image par un même utilisateur peuvent aboutir à plusieurs descriptions et interprétations parfois antagonistes.
Afin de résoudre ces problèmes, les systèmes d’indexation d’image par contenu CBIR (Content Based Image Retrieval) sont introduits récemment.
 
L’objectif principal est d’étudier le principe de la recherche et l’indexation d’images par le contenu (CBIR).
Le deuxième objectif consiste à développer un prototype d’un système de recherche d’images par le contenu.
<h3>Axe 8 : Modèles d’apprentissage profond explicables dans les cas d’analyse d’images médicales : maladie d’Alzheimer et de Covid19</h3>
Actuellement la plupart des recherche effectuées pour la détection de la maladie d'Alzheimer focalisent sur l'atrophie de l'hippocampe or L’atrophie hippocampique est également observée dans le vieillissement normal et dans de nombreuses autres pathologies par exemple : maladie de parkinson, schizophrénie, épilepsie temporale. Notre proposition consiste à utiliser en plus de l'hippocampus d'autres régions cérébrales vulnérables impliquées dans la maladie d'Alzheimer telle que, amygdale, gyrus parahippocampique, cortex entorhinal, cortex périrhinal et cortex cingulaire postérieur.
Nous allons utiliser l'intelligence artificielle et précisément Deep Learning pour extraire des descripteurs spatiaux discriminants de chaque région cérébrale de l'image 3D basé sur le réseau de neurones convolutifs 3D (3D CNN) et suivre la dégénérescence de ces régions cérébrales dans la maladie d'Alzheimer en se basant sur le réseau de neurones récurrents (LSTM-RNN et GRU- RNN) pour extraire des descripteurs temporels. Ces derniers vont nous permettre de suivre l'évolution longitudinale de la dégénérescence et par conséquent l'évolution de la maladie d'Alzheimer. Pour atteindre un meilleur diagnostic, ces descripteurs spatiaux-temporels seront extraits de trois modalités d'imagerie médicale : l'Imagerie par Résonance Magnétique Structurelle (sMRI), l'Imagerie du Tenseur de Diffusion (DTI) et la Tomographie à Émissions de Positrons (PET) en se basant sur la technique de la fusion multimodale d'images.
Dans ces travaux de recherches nous allons aussi proposer un modèle de prédiction de COVID'19 permettant de suivre l'évolution de COVID'19 au Maroc avec l'utilisation des LSTM et GRU.


</p>
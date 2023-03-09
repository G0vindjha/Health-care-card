-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 02:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(48, 'Updates', 13),
(49, 'Consult', 1),
(47, 'Lab Test', 1),
(46, 'Precription', 1),
(45, 'Medical Record', 1),
(44, 'Help & Support', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `id` int(40) NOT NULL,
  `doctorfname` varchar(40) NOT NULL,
  `doctorlname` varchar(40) NOT NULL,
  `doctoruname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `doctormnumber` varchar(40) NOT NULL,
  `doctorvarificationno` int(40) NOT NULL,
  `doctoraadharno` int(40) NOT NULL,
  `doctorpanno` varchar(40) NOT NULL,
  `img` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `specilize` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`id`, `doctorfname`, `doctorlname`, `doctoruname`, `password`, `doctormnumber`, `doctorvarificationno`, `doctoraadharno`, `doctorpanno`, `img`, `email`, `specilize`) VALUES
(2, 'Nirali', 'Patil', 'nirali', 'Nirali@1234', '8743565389', 876567843, 1453987586, 'DJC66575K', '2.jpeg', 'Nirali@gmail.com', 'ENT'),
(3, 'Jaynesh', 'Mehta', 'jaynesh', 'Jaynesh@1234', '9162438796', 698774849, 1487646782, 'BGK05774Y', '3.jpeg', 'Jaynesh@gmail.com', 'Gynecology'),
(4, 'Mayur', 'Patel', 'mayur', 'Mayur@1234', '9867452234', 465874543, 2058756477, 'GF6478499K', '4.jpeg', 'Mayur@gmail.com', 'Obstetrics'),
(5, 'Pranali', 'Patil', 'pranali', 'Pranali@1234', '9987653456', 984372986, 209475876, 'LK987547D', '5.jpeg', 'Pranali@gmail.com', 'Dentist'),
(6, 'Kuldeep', 'Parmar', 'kuldeep', 'kuldeep@1234', '8790645325', 1843095789, 1748973445, 'GT3274674U', '6.jpeg', 'Kuldeep@gmail.com', 'Anesthesiology'),
(7, 'Banshri', 'Mehta', 'banshri', 'Banshri@1234', '9812563453', 468765783, 632843662, 'KD787478J', '7.jpeg', 'Banshri@gmail.com', 'Orthopedition'),
(8, 'Varsha', 'Obairoy', 'varsha', 'Varsha@1234', '8908654567', 869345445, 1857368969, 'HK846745U', '8.jpeg', 'Varsha@gmail.com', 'Microbology'),
(9, 'Pankaj', 'Tripathi', 'pankaj', 'Pankaj@1234', '7987646537', 678437864, 897436382, 'YT68744KL', '9.jpeg', 'Pankaj@gmail.com', 'Pethology');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(77, 'Bharat Biotech dispatches first shipments of iNCOVACC across India', 'New Delhi: The Bharat Biotech on Monday dispatched the first shipments of the World\'s first intranasal Covid19 vaccine iNCOVACC to various locations across India.\r\n\r\n\"The first shipments of #iNCOVACC are being dispatched to various locations across #India. A moment of pride and accomplishment for team @BharatBiotech,\" Bharat Biotech said in a tweet.\r\n\r\nOn Sunday Dr Krishna Ella, Executive Chairman, Bharat Biotech said that Bharat Biotech Pvt Ltd has started dispatching World\'s first Intranasal heterologous booster dose to hospitals. \"We have just dispatched nasal vaccines two days ago to the hospitals,\" he said.\r\n\r\nDr Ella informed about the dispatch of vaccines during the UW-Madison Global Health Institute, and Ella Foundation agreement to establish the first-ever \'UW-Madison One Health Center\' in India to advance vaccines, therapeutics, and global health education.', '48', '08 Mar,2023', 46, '1678291972-pexels-pixabay-356040.jpg'),
(76, 'Vaping As Dangerous As Smoking Cigarettes, 5 Health Problems It Can Cause', 'Depending on your diet, lifestyle and the pollution levels in the area you reside, vaping additionally can increase the risk of malignancies in your body. Long-term exposure to vaping the highly toxic compounds into your body and several harmful chemicals present in vape juice is essentially dangerous. Habit of vaping may increase the risk of cancer, including mouth cancer, tongue cancer, or throat cancer\r\n\r\nMany research may raise alarm for cardiovascular diseases linked to vaping. Regular vaping is proven to disrupt the cardiovascular system by increasing the risk of heart attacks, strokes, and hypertension. Vaping may leech nicotine in the body which affects blood pressure level. Over time, vaping sessions and smoking makes the blood vessels constrict.\r\n\r\nThe substance diacetyl, which is present in some vape juices, has been connected to a rare lung condition known as popcorn lung disease (bronchiolitis obliterans). Breathlessness, wheezing, and tightness in the chest are symptoms of popcorn lung disease. These symptoms could get worse over time if ignored.', '48', '08 Mar,2023', 46, '1678291884-pexels-cottonbro-studio-4786955.jpg'),
(75, 'Protect your heart health with these six summertime meals', 'Our health is harmed by high temperatures and excessive physical stress. This causes the heart to pump more blood, which might make summertime heart attacks more likely. Therefore, it is really important to take extra care of our heart health. \r\nHaving a diet that is high in fibre, antioxidants, potassium, and magnesium while being low in sodium and fat is the fundamental rule that people should adhere to for a healthy heart\r\nHere is the list which contains a few cooling foods that you should include in your diet during the summer months to combat the effects of the hot weather.', '48', '08 Mar,2023', 46, '1678291607-pexels-kristina-paukshtite-704748.jpg'),
(72, 'H3N2 virus hits India: All you need to know about this viral outbreak', 'Every second person is experiencing prolonged post-viral cough, breathlessness and sneezing. This trend is a rarity, especially in North India, where more flu cases have been reported in the months of January, February and March.', '48', '08 Mar,2023', 46, '1678291101-pexels-pixabay-40568.jpg'),
(73, 'How to make Holi safer for your pets: A quick guide.', 'The wait is over and the festival of colours is finally here! The days leading to Holi are mostly spent planning for a grand party, making arrangements for a delectable food platter for the guests and sourcing Holi quintessentials such as colours and water guns. If you are a pet parent, your Holi to-do list should also include taking extra care of your pawsome buddies during the festival. The boisterous ‘Rang Barse’ surroundings all around may not be very pleasant for your pets.\r\nYou must remember that the chemical-infused colours can be harmful for your pets and that the sudden high-spirited ambience may cause anxiety and stress among them. It is important to take preventive measures to ensure a safer Holi for your pets.', '48', '08 Mar,2023', 46, '1678291298-pexels-pixabay-160846.jpg'),
(74, 'India\'s challenge is to combine Ayurveda and contemporary medicine into a world-class service: Vikra', 'There are two types of medical tourism that are taking place. It\'s similar to immigration. Either the person moves or the job moves. In the health industry, we are seeing people go outside for a second opinion and the affluent for a better quality of healthcare, whether it\'s Sloan Kettering for cancer or proton beam therapy in cancer and oncology. You find a lot of people going outside this country for a second opinion and surgery. You also find a lot of people coming to India for Ayurveda and Yoga. You do find a lot of people coming in for affordable healthcare through Apollo or through any of the leading reputable hospitals in India. So you have people going out and people coming in. So I think you will find healthcare in India growing a lot more, and the number of people going out will be less and less in the coming years. The ease with which we can deliver world-class services is improving as a result of our technology, equipment, and scale. And our uniqueness, our niche in providing what is Indian, whether it\'s in yoga, deep diving into individualised meditation, or whether it\'s individualised meditation in Ayurveda, we are finding that even more. And now, the challenge that faces India is trying to integrate all of this into a world-class service', '48', '08 Mar,2023', 46, '1678291467-pexels-thirdman-5327921.jpg'),
(78, '5 steps to raise a healthy child', 'It appears to be both easy and difficult to raise healthy children. Maintaining health seems to be a bigger issue now that Covid-19 and the threat of illnesses are both present. Today, however, parents who are concerned about their children\'s health must fight off a variety of unhealthy temptations. These are 5 methods for maintaining your child\'s health.\r\n\r\nWhile bouts of hunger can be satiated with snacks, it’s important that parents set fixed mealtime for their kids. Their snacks preferably should be scheduled in between meals. Eating too much too close to a meal may cause them to lose their appetite; waiting too long to eat can lead to overeating.\r\n\r\nDuring the early years, children develop bone and muscle. It is thus advisable to include protein-rich food in their snacks. Protein helps to quench hunger for a longer time compared to high-sugar snacks such as chocolate. For instance, eggs, cheese, or nuts are a good source of protein that will give them the energy that they need throughout the day\r\n\r\nChildren may enjoy eating sweets over vegetables leading them to refusing healthier food options and become a picky eater. Repeatedly exposing children to a new food item, within a positive social environment, and from an early age is effective in increasing children’s willingness to try it.', '48', '08 Mar,2023', 46, '1678292175-pexels-luna-lovegood-1104007.jpg'),
(79, 'Thane Municipal Corp warns against feeding pigeons: How living near the birds can lead to diseases i', 'Thane Municipal Corporation (TMC) in Maharashtra has aimed to spread public awareness about hypersensitive pneumonia, a lung disease which is contracted by living in close proximity to pigeons\r\n\r\nRecently, the Thane Municipal Corporation (TMC) in Maharashtra put up several posters warning people against feeding pigeons in order to spread public awareness about hypersensitive pneumonia, a lung disease which is contracted by living near pigeons.\r\n\r\nThe posters warned that a fine of Rs 500 will be levied on those found feeding pigeons. It further stated that pigeon-associated hypersensitive pneumonia is on the rise in Mumbai and Pune and people with a pre-existing lung condition are 60-65 per cent more likely to fall prey to the disease. No such posters have been put up in Mumbai so far.', '48', '08 Mar,2023', 46, '1678292261-pexels-pixabay-36715.jpg'),
(80, 'Telemedicine Society of India launches Haryana State Chapter', 'Faridabad: The Haryana state chapter-Telemedicine Society of India (TSI) which was inaugurated at Amrita Hospital, Faridabad aims to connect patients who need medical help with in-house technical teams using telemedicine and clinics on wheel units.\r\n\r\nSpeaking at the launch, Dr Prem Nair, Group Medical Director, Amrita Hospitals and Vice-President, National Telemedicine Society of India, informed that this was one of the important milestones and informed that they are already providing teleconsultation and Tele-education through mobile telemedicine units. We look forward to working with the Telemedicine Society of India and start connecting with local healthcare facilities.\r\n\r\nThe TSI’s Haryana chapter will collaborate with all medical colleges and institutions to provide in-training for future doctors. It is the 16th state chapter of TSI in India.\r\n\r\nStressing the need to bridge the healthcare digital divide, Dr Puneet Dhar, President, Haryana Telemedicine Chapter said, “About 1.3 billion people in the country fall in the spectrum of the healthcare digital divide. Healthcare infrastructure development is vital to the country\'s development, and telemedicine can help. The increasing penetration of smartphones, mobile connectivity, and the Internet makes it a game changer. During natural disasters, our telemedicine van goes around providing treatment. It proved to be crucial when COVID-19 struck.”', '48', '08 Mar,2023', 46, '1678292682-pexels-fauxels-3184398.jpg'),
(81, 'India consistently trying to minimise dependence on foreign countries in health sector: PM Modi', 'New Delhi: Prime Minister Narendra Modi said on Monday that life-savers like medicines, vaccines, and medical devices were weaponised during the COVID-19 pandemic, and asserted that his government has been consistently trying to minimise India\'s dependence on foreign countries in the health sector.\r\n\r\nAddressing a post-budget webinar on \'Health and Medical Research\', Modi said India\'s health sector was marred by a lack of an integrated approach and long-term vision for decades but his government has not confined it to the health ministry alone and has dealt with it with the \"whole of government\" outlook.\r\n\r\nOur entrepreneurs should ensure India doesn\'t have to import any technology and becomes self-reliant, he said, highlighting various measures taken by his government to boost entrepreneurship in the field.\r\n\r\nThe prime minister said making treatment affordable has been a top priority, adding that the \'Ayushman Bharat\', a government health insurance scheme, and \'Jan Aushadhi\' centres, where medicines are sold at cheaper rates, have saved citizens Rs 80,000 crore and Rs 20,000 crore respectively.\r\n\r\nThe country\'s pharma sector earned global confidence during the pandemic, Modi said, urging the sector to build and capitalise on the trust.', '48', '08 Mar,2023', 46, '1678292736-modiji.jpg'),
(82, 'Does This Budget Do Enough For Health?', 'Another worrying statistics is the doctor to patient ratio in India. We have 0.7 doctors per 1,000 patients. WHO says the average should be 2.5 doctors per 1,000 patients. What can the government do to increase the doctors to patient ratio?\r\nWell, nearly 600 medical colleges with the capacity to produce almost 100,000 graduates per year have been set up.\r\nBudgets are required to invest in government medical colleges to build appropriate infrastructure for ensuring high quality of instruction.\r\nRight now, many of our medical colleges are in a very unsatisfactory condition without basic infrastructure like libraries or laboratories.\r\nPeople in Kerala were expecting that AIIMS would be set up in their state, but this Budget did not find any mention of it. At this moment, what is the status of other AIIMS that were to be set up?\r\nWe were to get 22 AIIMS. In 2019, only six AIIMS were fully operational. What is the status of these AIIMS? The budget does not mention anything about it', '48', '08 Mar,2023', 46, '1678292776-pexels-pixabay-53621.jpg'),
(83, 'Why You Shouldn’t Ignore The Health Of Your Kidneys', 'Kidney health is crucial:\r\n\r\nThe kidneys are vital organs that play a critical role in maintaining overall health. They are responsible for filtering waste and excess fluid from the blood, regulating blood pressure, and producing hormones that are essential for bone health and the production of red blood cells. When the kidneys are not functioning properly, waste products and fluids can build up in the body, leading to a variety of health problems.\r\n\r\nDr. Manoj Singhal, MD DM DNB & MBA (Healthcare), Senior Director, Nephrology & Kidney Transplantation, Max Super Speciality Hospital, Vaishali says, “Unfortunately, many people take the health of their kidneys for granted, which can lead to serious health problems. People are generally well aware of the dangers of high BP and of heart disease, but the majority thinks that kidney disease is something you think about only when you have back pain or pain while passing urine. In fact, chronic kidney disease (CKD) affects an estimated 10% of the global population.”\r\n\r\nCKD is a progressive condition that occurs when the kidneys are damaged and cannot filter blood properly. This can lead to a build-up of waste products and fluids in the body which can cause a range of health problems, including high BP, anaemia, bone disease, and cardiovascular disease. In severe cases, CKD can lead to kidney failure, which requires dialysis or kidney transplantation for its treatment.', '48', '08 Mar,2023', 46, '1678292823-pexels-anna-tarazevich-8016910.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptionrecord`
--

CREATE TABLE `prescriptionrecord` (
  `id` int(10) NOT NULL,
  `diseasename` varchar(100) NOT NULL,
  `hospitalname` varchar(100) NOT NULL,
  `patientfname` varchar(40) NOT NULL,
  `patientlname` varchar(40) NOT NULL,
  `patientuname` varchar(40) NOT NULL,
  `patientid` int(50) NOT NULL,
  `doctorfname` varchar(40) NOT NULL,
  `doctorlname` varchar(40) NOT NULL,
  `doctoruname` varchar(50) NOT NULL,
  `medicinename` varchar(200) NOT NULL,
  `testname` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescriptionrecord`
--

INSERT INTO `prescriptionrecord` (`id`, `diseasename`, `hospitalname`, `patientfname`, `patientlname`, `patientuname`, `patientid`, `doctorfname`, `doctorlname`, `doctoruname`, `medicinename`, `testname`, `date`) VALUES
(1, 'Fever', 'Reva Hospital', 'Govind', 'Jha', 'sam', 2147483647, 'Dharm', 'Patel', 'Dharm', 'peracitamol,Dmole,Aticent,pputin,gero', 'Blood,Urine', '2023-01-10'),
(2, 'Cough', 'Reva', 'Govind', 'Jha', 'sam', 2147483647, 'Dharm', 'Patel', 'Dharm', 'Dnite,paracitamol,dycloride,mfinolee,gsrid,biroid', 'Blood,skin', '2023-01-10'),
(4, 'fever', 'Reva ', 'Govind', 'Jha', 'sam', 2147483647, 'Dharm', 'Patel', 'Dharm', 'paracitamol jvs\\hvhzc mbscmbz', 'blood skin', '2023-01-19'),
(5, 'typhod', 'Mehta Hospital', 'Dhaval', 'Parmar', 'dhaval', 2147483647, 'jaynesh', 'mehta', 'Jaynesh', 'Paracitamol,Chipla Coughshiraph,Dolo 650,Jaynoxene,Gylophineoxide,yuzeno', 'Blood,Urine', '2023-03-23'),
(6, 'Chiicken phox', 'Matrix', 'Dhaval', 'Parmar', 'dhaval', 2147483647, 'Nirali', 'Patil', 'nirali', 'Sopharamashine,ZhanduPancharist,Dolo 650,Combiflame,RingGurd', '', '2023-03-01'),
(7, 'Fever', 'Jaynesh Mehta', 'Dhaval', 'Parmar', 'dhaval', 2147483647, 'Varsha', 'Obairoy', 'varsha', 'Prasitamol,Dolo 650,Dmol,xincocshine', 'Blood,Urine', '2023-03-05'),
(8, 'Rootcanal', 'Nirwana', 'Dhaval', 'Parmar', 'dhaval', 2147483647, 'Pranali', 'Patil', 'pranali', 'Combiflame,cinotozane,zynosulphane', '', '2023-03-08'),
(11, 'Fever', 'Reva Hospital', 'Dhruv', 'Patel', 'dhruvpatel', 2147483647, 'Nirali', 'Patil', 'nirali', 'Paracitamol,Dolo650,xincocsine,janodious,Resphine', 'Blood,ECG', '2023-03-09'),
(12, 'Fever', 'Mehta hospital', 'Dhruv', 'Patel', 'dhruvpatel', 2147483647, 'Nirali', 'Patil', 'nirali', 'dolo,Paracitamol', '', '2023-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(0, 'Normal'),
(1, 'Admin'),
(3, 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `websitename` varchar(60) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `footerdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `websitename`, `logo`, `footerdesc`) VALUES
(1, 'News Website', 'HCC.jpg', '© Copyright 2022 HCC | Powered by <a href=\"https://www.instagram.com/_govind_jha._/\">HEALTH CARE CARD</a>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(47, 'Vinay', 'Jha', 'vinay', '01a0683665f38d8e5e567b3b15ca98bf', 0),
(48, 'Keshav', 'Jha', 'keshav', '3438a15414db1cf03c82a6d0c524ed1a', 0),
(49, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(46, 'Govind', 'Jha', 'sam', '4e973aedc00f32e1bbea373bc488b2b7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userallergeticinformation`
--

CREATE TABLE `userallergeticinformation` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `allergies` varchar(200) NOT NULL,
  `injuries` varchar(200) NOT NULL,
  `infections` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userallergeticinformation`
--

INSERT INTO `userallergeticinformation` (`id`, `firstname`, `username`, `allergies`, `injuries`, `infections`) VALUES
(1, 'Govind', 'sam', 'Ghee,Sigrets Smell,Alcohol Smell,Tobaco Smell', 'Right Hand,Left Hand', 'Ghee,Anything on face'),
(2, 'harshal', 'harshal@123', '', '', ''),
(10, 'GOVIND', 'gfhjgsdc', '', '', ''),
(11, 'GOVIND', 'gfhjgsdc', 'hbsadkjbckj,hjgdchgsd,hjgadbsh,jhgagscj', 'jhhjgshd,jhghads,jgasj,bsadnvnvsda', 'jhgfhgfjda,jhgjasd,kgf\\hsda,jvbashdbh'),
(12, 'Dharm', 'dharm', '', '', ''),
(13, 'Dharm', 'dharm', '', '', ''),
(14, '', 'dharm', 'Milk,flower,oil', 'knee,hand,finger', 'colour,cake'),
(15, '', 'dharm', '', '', ''),
(16, '', 'dharm', 'extrA', 'extra', 'extra'),
(17, '', 'mehtajaynesh', '', '', ''),
(18, '', 'dhaval', 'Dust,Pinut,Hard Perfume', 'Finger,Legs,toe', 'Oil,muffens,pinut,Chocolets'),
(19, '', 'dhruvpatel', 'Ghee,Sigrets Smell,Alcohol Smell,Tobaco Smel', 'knee,hand,finger', 'Ghee,Anything on face');

-- --------------------------------------------------------

--
-- Table structure for table `userbasicinformation`
--

CREATE TABLE `userbasicinformation` (
  `id` int(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `fathername` varchar(80) NOT NULL,
  `mothername` varchar(80) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `maritalstatus` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `height` varchar(30) NOT NULL,
  `weight` float NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `diabetic` varchar(20) NOT NULL,
  `metalinbody` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userbasicinformation`
--

INSERT INTO `userbasicinformation` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `DOB`, `fathername`, `mothername`, `gender`, `maritalstatus`, `nationality`, `height`, `weight`, `bloodgroup`, `diabetic`, `metalinbody`) VALUES
(15, 'Govind', 'Jha', 'sam', 'Sam@1234', 'jhag2491@gmail.com', '2001-11-19', 'Ugant Jha', 'Pinki Jha', 'Male', 'Unmarid', 'Indian', '5.9', 70, 'AB-', 'No', 'NO'),
(16, 'Keshav', 'Jha', 'keshav', '3438a15414db1cf03c82a6d0c524ed', 'keshav@dhirubhai.com', '0000-00-00', 'Ugant Jha', 'Pinki Jha', 'Male', 'Unmarid', 'Indian', '1.5', 30, 'AB-', 'No', 'No'),
(17, 'harshal', 'patil', 'harshal@123', '363e3dac589e3a0ca6e0d0ba52cee6', 'harshalpatil1117@gma', '0000-00-00', 'ramchandra', 'madhuri', 'male', 'unmarried', 'indian', '5\'7', 55, 'o-ve', 'no', 'no'),
(19, 'GOVIND', 'JHA', 'gfhjgsdc', 'f2ef9b2244cc2607df294303f2720e', 'jhag2491@gmail.com', '0000-00-00', 'zxzxvzdx', 'zcx,nhkjkd', 'kjhdafkj', 'jahskd\\j', 'jhjk', '232', 212, 'saca', 'yes', 'khkdjsa'),
(20, 'Dharm', 'Patel', 'dharm', 'Dharm@1234', '190303105221@parulun', '2023-03-09', 'Govind ', 'Shrusti', 'male', 'sindle', 'Indian', '5\'9', 55, 'AB-', 'NO', 'No'),
(21, 'jaynesh', 'mehta', 'mehtajaynesh', 'jaynesh5245', 'jayneshmehta12@gmail', '2001-02-22', 'hemant mehta', 'hema mehta', 'male', 'single', 'indian', '6', 90, 'o+ve', 'no', 'no'),
(23, 'Dhaval', 'Parmar', 'dhaval', 'Dhaval@1234', 'dhaval@gmail.com', '2023-03-09', 'Dilip Parmar', 'Usha Parmar', 'Male', 'single', 'Indian', '5\'4', 56, 'b-', 'yes', 'yes'),
(24, 'Dhruv', 'Patel', 'dhruvpatel', 'dhruv0000', 'dhruv2997@gmail.com', '1992-12-12', 'Hemex', 'kiran', 'male', 'single', 'indian', '170', 60, 'B+', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `usercontactdetails`
--

CREATE TABLE `usercontactdetails` (
  `id` int(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `patientid` varchar(100) NOT NULL,
  `umnumber` varchar(20) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `ufmnumber` varchar(20) NOT NULL,
  `ummnumber` varchar(20) NOT NULL,
  `uemnumber` varchar(20) NOT NULL,
  `uproomsociety` varchar(50) NOT NULL,
  `uplandmark` varchar(20) NOT NULL,
  `upcity` varchar(20) NOT NULL,
  `upstate` varchar(20) NOT NULL,
  `uppincode` int(10) NOT NULL,
  `urroomsociety` varchar(50) NOT NULL,
  `urlandmark` varchar(20) NOT NULL,
  `urcity` varchar(20) NOT NULL,
  `urstate` varchar(20) NOT NULL,
  `urpincode` int(10) NOT NULL,
  `uepname` varchar(40) NOT NULL,
  `ueprelation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercontactdetails`
--

INSERT INTO `usercontactdetails` (`id`, `firstname`, `lastname`, `username`, `patientid`, `umnumber`, `uemail`, `ufmnumber`, `ummnumber`, `uemnumber`, `uproomsociety`, `uplandmark`, `upcity`, `upstate`, `uppincode`, `urroomsociety`, `urlandmark`, `urcity`, `urstate`, `urpincode`, `uepname`, `ueprelation`) VALUES
(6, 'Govind', 'Jha', 'sam', '41673163612', '2147483647', 'jhag2491@gmail.com', '2147483647', '2147483647', '2147483647', '505, Shri Ram Bhavan Society', 'Nehru Street', 'Vapi', 'Gujarat', 396191, '505, Shri Ram Bhavan Society', 'Nehru Street', 'Vapi', 'Gujarat', 396191, 'Pinki Jha', 'Mother'),
(7, 'Keshav', 'Jha', 'keshav', '31673168500', '2147483647', 'keshav@dhirubhai.com', '2147483647', '2147483647', '2147483647', '505, Shri Ram Bhavan Society', 'Nehru street', 'Vapi', 'Gujarat', 396191, '505,  Shri Ram Bhavan Society', 'Nehru Street', 'Vapi', 'gujarat', 396191, 'Govind Jha', 'Brother'),
(8, 'harshal', 'patil', 'harshal@123', '61673859636', '2147483647', 'harshalpatil1117@gmail.com', '2147483647', '2147483647', '2147483647', '203', 'gidc', 'ankleshwar', 'gujarat', 393002, '203 shree hari residency', 'gidc', 'ankleshwar', 'gujarat', 393002, 'govind', 'bro'),
(10, 'GOVIND', 'JHA', 'gfhjgsdc', '91674109598', '2147483647', 'jhag2491@gmail.com', '2147483647', '342234324', '324324', 'sdfdsfdfs', 'sdadfsdfs', 'fdfsdfs', 'asfdfds', 43234243, 'kjkhdkjfhkj', 'jhsdkfj', 'bnkjhk', 'Gujarat', 396191, 'bkjbkjb', 'zdsf'),
(11, 'Dharm', 'Patel', 'dharm', '11678269410', '2147483647', '190303105221@paruluniversity.ac.in', '2147483647', '2147483647', '2147483647', 'Uma', 'Uma', 'Vadodara', 'Gujarat', 390019, 'Uma', 'Uma', 'Vadodara', 'Gujarat', 390019, '9106739843', 'Father'),
(12, 'jaynesh', 'mehta', 'mehtajaynesh', '41678274439', '2147483647', 'jayneshmehta12@gmail.com', '0', '2147483647', '2147483647', 'd-103 chandramani chandkheda Ahemdabad ', 'near chandkheda mukt', 'ahemdabad', 'gujarat', 390091, 'd-103 chandramani chandkheda Ahemdabad ', 'near chandkheda mukt', 'Ahemdabad', 'gujarat', 390091, 'hema mehta', 'son'),
(13, '', '', '', '11678274713', '0', '', '0', '0', '0', '', '', '', '', 0, '', '', '', '', 0, '', ''),
(14, 'Dhaval', 'Parmar', 'dhaval', '7383290217', '8238993060', 'dhaval@gmail.com', '7096223659', '98420974', '9106739843', 'd-012 kalol', 'pavaghadh', 'Kalol', 'Gujarat', 389320, 'd-012 Kalol', 'Pavaghadh', 'Kalol', 'Gujarat', 389320, 'Govind Jha', 'Friend'),
(15, 'Dhruv', 'Patel', 'dhruvpatel', '31678335682', '07096223659', 'dhruv2997@gmail.com', '9846390333', '9863930222', '07096223659', 'shakti sheri. khari kui', 'undel,khambhat', 'Vadodara', 'Gujarat', 388640, 'shakti sheri. khari kui', 'undel, khambhat', 'Vadodara', 'Gujarat', 388640, 'dharm', 'hemex');

-- --------------------------------------------------------

--
-- Table structure for table `useremployerdetails`
--

CREATE TABLE `useremployerdetails` (
  `firstname` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `employername` varchar(100) NOT NULL,
  `employementno` int(40) NOT NULL,
  `employercontact` int(20) NOT NULL,
  `employeremail` varchar(50) NOT NULL,
  `employeraddress` varchar(100) NOT NULL,
  `profession` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useremployerdetails`
--

INSERT INTO `useremployerdetails` (`firstname`, `username`, `employername`, `employementno`, `employercontact`, `employeremail`, `employeraddress`, `profession`) VALUES
('', 'dharm', 'RadixWeb PVT. LTD.', 4825, 78578498, 'hr@radixweb.com', 'Ahmedabad', 'No'),
('', 'dhaval', 'RadixWeb PVT. LTD.', 4815, 989080980, 'hr@radixweb.com', 'Ahmedabad', 'No'),
('', 'dhruvpatel', 'parul', 23, 874930, '190303105221@paruluniversity.ac.in', 'baroda', 'No'),
('harshal', 'harshal@123', 'radixweb', 12, 2147483647, 'jhag2491@gmail.com', '203', 'No'),
('', 'mehtajaynesh', 'Radixweb', 1903030291, 258369147, 'radixweb8.hr@gmail.com', 'charoddi ahemdabad', 'No'),
('pinki', 'pinki', '', 0, 0, '', '', 'No'),
('Govind', 'sam', 'Radixweb', 981273, 2147483647, 'hr@radixweb.com', 'Ahmdabad,Gujarat', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `userimage`
--

CREATE TABLE `userimage` (
  `id` int(10) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userimage`
--

INSERT INTO `userimage` (`id`, `firstname`, `username`, `filename`) VALUES
(30, 'Govind', 'sam', '1672987373-Sam.jpeg'),
(31, 'Keshav', 'keshav', '1673168591-Keshav7.jpg'),
(35, 'harshal', 'harshal@123', '1673859785-20220913_113834.jpg'),
(37, 'GOVIND', 'gfhjgsdc', '1674109647-post-format.jpg'),
(38, 'Dharm', 'dharm', '1678269496-DSCF3028.JPG'),
(39, 'jaynesh', 'mehtajaynesh', '1678274469-DSCF3041.JPG'),
(40, '', '', '1678274715-'),
(41, '', '', '1678274717-'),
(42, 'Dhaval', 'dhaval', '1678275017-DSCF3029.JPG'),
(43, 'Dhruv', 'dhruvpatel', '1678335716-DSCF3079.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `userinsurancedetail`
--

CREATE TABLE `userinsurancedetail` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `membershipnum` int(20) NOT NULL,
  `phname` varchar(50) NOT NULL,
  `phdob` date NOT NULL,
  `phcontact` varchar(20) NOT NULL,
  `phrelation` varchar(20) NOT NULL,
  `companynum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinsurancedetail`
--

INSERT INTO `userinsurancedetail` (`id`, `firstname`, `lastname`, `username`, `companyname`, `membershipnum`, `phname`, `phdob`, `phcontact`, `phrelation`, `companynum`) VALUES
(8, 'Govind', 'Jha', 'sam', 'NO', 0, 'Govind Jha', '2001-11-19', '2147483647', 'Me', 90909090),
(9, 'Keshav', 'Jha', 'keshav', 'Bajaj', 809998, 'Govind Jha', '2001-11-19', '2147483647', 'Brother', 66876756),
(10, 'harshal', 'patil', 'harshal@123', 'no', 66, 'h', '2023-04-06', '123', 'bro', 0),
(12, 'GOVIND', 'JHA', 'gfhjgsdc', 'dszdfsd', 321231, 'khjkhjk', '0021-02-21', '321321213', 'vxcxdv', 21332231),
(13, 'Dharm', 'Patel', 'dharm', 'Bajaj', 6788534, 'Dharm Patel', '2023-03-10', '977789908', 'Me', 808977090),
(14, 'jaynesh', 'mehta', 'mehtajaynesh', 'bajaj', 29472682, 'jaynesh mehta', '2023-03-17', '23451235', 'son', 252356346),
(15, '', '', '', '', 0, '', '0000-00-00', '0', '', 0),
(16, 'Dhaval', 'Parmar', 'dhaval', 'Bajaj', 89789789, 'Dhaval Parmar', '2002-05-02', '7383290297', 'Me', 987987907),
(17, 'Dhruv', 'Patel', 'dhruvpatel', 'Parul university', 77870, 'dhruv patel', '1992-12-12', '3432434', 'brother', 6282990);

-- --------------------------------------------------------

--
-- Table structure for table `userlabrecords`
--

CREATE TABLE `userlabrecords` (
  `id` int(30) NOT NULL,
  `patientuname` varchar(50) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `doctorname` varchar(60) NOT NULL,
  `hospitalname` varchar(50) NOT NULL,
  `testname` varchar(30) NOT NULL,
  `detailreport` varchar(150) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlabrecords`
--

INSERT INTO `userlabrecords` (`id`, `patientuname`, `date`, `doctorname`, `hospitalname`, `testname`, `detailreport`, `filename`) VALUES
(15, 'sam', '2023-01-19', 'Dharm Patel', 'Reva Hospital', 'Blood', 'Negative or normal, which means the disease or substance being tested was not found.', '1673431170-C242R28AdmitCard.pdf'),
(17, 'sam', '2023-01-19', 'Jaynesh Mehta', 'Mehta hospital', 'Urine', 'kjshvcgiughdsivugihsdgvgvugyfeshgsugcviuihfdhvhiuhvduhiuhfduihiudfhuivhuihuidvhiuvfhuihfduhvui', '1674067632-190303105221_oopj_Lab.pdf'),
(18, 'dhaval', '2023-03-08', 'Jaynesh Mehta', 'Mehta Hospital', 'Blood', 'He is not well .....................................................................................................', '1678298291-Report1.pdf'),
(19, 'dhaval', '2023-03-08', 'Jaynesh Mehta', 'Mehta Hospital', 'Urine', 'He is not well........................................................................................................', '1678298410-Report1.pdf'),
(20, 'dhruvpatel', '2023-03-09', 'Dharm Patel', 'DD Laboratory', 'Blood', 'There is low level of oxygen in Blood.............................', '1678339261-Report1.pdf'),
(21, 'dhruvpatel', '2023-03-09', 'Dharm Patel', 'DD lab', 'ECG', 'sominfg', '1678343963-Report1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `prescriptionrecord`
--
ALTER TABLE `prescriptionrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userallergeticinformation`
--
ALTER TABLE `userallergeticinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbasicinformation`
--
ALTER TABLE `userbasicinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercontactdetails`
--
ALTER TABLE `usercontactdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useremployerdetails`
--
ALTER TABLE `useremployerdetails`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `userimage`
--
ALTER TABLE `userimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinsurancedetail`
--
ALTER TABLE `userinsurancedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlabrecords`
--
ALTER TABLE `userlabrecords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `doctordetails`
--
ALTER TABLE `doctordetails`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `prescriptionrecord`
--
ALTER TABLE `prescriptionrecord`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `userallergeticinformation`
--
ALTER TABLE `userallergeticinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `userbasicinformation`
--
ALTER TABLE `userbasicinformation`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `usercontactdetails`
--
ALTER TABLE `usercontactdetails`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userimage`
--
ALTER TABLE `userimage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `userinsurancedetail`
--
ALTER TABLE `userinsurancedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userlabrecords`
--
ALTER TABLE `userlabrecords`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

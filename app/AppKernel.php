<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel {

    public function registerBundles() {
        // When you install a third-party bundle or create a new bundle in your
        // application, you must add it in the following array to register it
        // in the application. Otherwise, the bundle won't be enabled and you
        // won't be able to use it.
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new AppBundle\AppBundle(),
            new CBA\HomeBundle\CBAHomeBundle(),
            new CBA\UserBundle\CBAUserBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),
            new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
            new Sonata\UserBundle\SonataUserBundle(),
            new Sonata\NewsBundle\SonataNewsBundle(),
            new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
            new Application\Sonata\NewsBundle\ApplicationSonataNewsBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Sonata\IntlBundle\SonataIntlBundle(),
            new Sonata\FormatterBundle\SonataFormatterBundle(),
            new Sonata\CacheBundle\SonataCacheBundle(),
            new Sonata\SeoBundle\SonataSeoBundle(),
            new Sonata\ClassificationBundle\SonataClassificationBundle(),
            new Application\Sonata\ClassificationBundle\ApplicationSonataClassificationBundle(),
            new Sonata\NotificationBundle\SonataNotificationBundle(),
            new Sonata\DatagridBundle\SonataDatagridBundle(),
        );

        // Some bundles are only used while developing the application or during
        // the unit and functional tests. Therefore, they are only registered
        // when the application runs in 'dev' or 'test' environments. This allows
        // to increase application performance in the production environment.
        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader) {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

}

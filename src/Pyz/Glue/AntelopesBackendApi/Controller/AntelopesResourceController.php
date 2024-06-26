<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Glue\AntelopesBackendApi\Controller;

use Generated\Shared\Transfer\AntelopesBackendApiAttributesTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractController;

/**
 * @method \Pyz\Glue\AntelopesBackendApi\AntelopesBackendApiFactory getFactory()
 */
class AntelopesResourceController extends AbstractController
{
    public function getCollectionAction(GlueRequestTransfer $glueRequestTransfer
    ): GlueResponseTransfer {
        return $this->getFactory()->createAntelopesReader()->getAntelopeCollection($glueRequestTransfer);
    }

    public function getAction(GlueRequestTransfer $glueRequestTransfer
    ): GlueResponseTransfer {
        return $this->getFactory()->createAntelopesReader()->getAntelope($glueRequestTransfer);
    }

    public function postAction(
        AntelopesBackendApiAttributesTransfer $antelopesBackendApiAttributesTransfer,
        GlueRequestTransfer $glueRequestTransfer
    ): GlueResponseTransfer {
        return $this->getFactory()->createAntelopeWriter()->createAntelope($antelopesBackendApiAttributesTransfer,
            $glueRequestTransfer);
    }

    public function patchAction(
        AntelopesBackendApiAttributesTransfer $antelopesBackendApiAttributesTransfer,
        GlueRequestTransfer $glueRequestTransfer
    ): GlueResponseTransfer {
        $antelopesBackendApiAttributesTransfer->setIdAntelope((int)$glueRequestTransfer->getResource()?->getId());
        return $this->getFactory()->createAntelopeUpdater()->updateAntelope($antelopesBackendApiAttributesTransfer,
            $glueRequestTransfer);
    }

    public function deleteAction(GlueRequestTransfer $glueRequestTransfer
    ): GlueResponseTransfer {
        return $this->getFactory()->createAntelopeDeleter()->deleteAntelope($glueRequestTransfer);
    }
}
